  const btn = document.getElementById('hamburgerBtn');
  const menu = document.getElementById('mobileMenu');
  const lines = btn.querySelectorAll('.hb-line');

  let menuOpen = false;

  function setMenuOpen(open) {
    menuOpen = open;
    menu.classList.toggle('-translate-y-full', !open);
    lines[0].style.transform = open ? 'translateY(8px) rotate(45deg)' : '';
    lines[1].style.opacity = open ? '0' : '1';
    lines[2].style.transform = open ? 'translateY(-8px) rotate(-45deg)' : '';
  }

  btn.addEventListener('click', () => setMenuOpen(!menuOpen));
  menu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => setMenuOpen(false));
  });

  const flowTrack = document.getElementById('flowTrack');
  const flowPrev = document.getElementById('flowPrev');
  const flowNext = document.getElementById('flowNext');

  if (flowTrack && flowPrev && flowNext) {
    const flowCards = Array.from(flowTrack.querySelectorAll('.flow-card'));
    const flowDots = Array.from(document.querySelectorAll('[data-flow-dot]'));
    let flowIndex = 0;

    function centerTarget(card) {
      return card.offsetLeft + card.offsetWidth / 2 - flowTrack.clientWidth / 2;
    }

    function updateActiveCard() {
      const viewportCenter = flowTrack.scrollLeft + flowTrack.clientWidth / 2;
      let closest = 0;
      let closestDist = Infinity;
      flowCards.forEach((card, i) => {
        const cardCenter = card.offsetLeft + card.offsetWidth / 2;
        const dist = Math.abs(cardCenter - viewportCenter);
        if (dist < closestDist) {
          closestDist = dist;
          closest = i;
        }
      });
      flowIndex = closest;

      flowCards.forEach((card, i) => {
        const active = i === closest;
        card.classList.toggle('opacity-100', active);
        card.classList.toggle('scale-100', active);
        card.classList.toggle('opacity-50', !active);
        card.classList.toggle('scale-90', !active);
        const media = card.querySelector('[data-flow-media]');
        if (media) {
          media.classList.toggle('opacity-0', !active);
          media.classList.toggle('invisible', !active);
        }
      });

      flowDots.forEach((dot, i) => {
        const active = i === closest;
        dot.classList.toggle('size-2.5', active);
        dot.classList.toggle('bg-brand', active);
        dot.classList.toggle('size-2', !active);
        dot.classList.toggle('bg-brand/30', !active);
        dot.setAttribute('aria-current', active ? 'true' : 'false');
      });
    }

    function updateFlowButtons() {
      const maxScroll = flowTrack.scrollWidth - flowTrack.clientWidth;
      flowPrev.disabled = flowTrack.scrollLeft <= 1;
      flowNext.disabled = flowTrack.scrollLeft >= maxScroll - 1;
    }

    function goTo(i) {
      flowIndex = Math.max(0, Math.min(flowCards.length - 1, i));
      flowTrack.scrollTo({ left: centerTarget(flowCards[flowIndex]), behavior: 'smooth' });
    }

    flowPrev.addEventListener('click', () => goTo(flowIndex - 1));
    flowNext.addEventListener('click', () => goTo(flowIndex + 1));
    flowDots.forEach((dot, i) => {
      dot.addEventListener('click', () => goTo(i));
    });

    let flowScrollTimer;
    flowTrack.addEventListener('scroll', () => {
      updateFlowButtons();
      clearTimeout(flowScrollTimer);
      flowScrollTimer = setTimeout(updateActiveCard, 100);
    });
    window.addEventListener('resize', () => {
      updateFlowButtons();
      goTo(flowIndex);
    });
    updateFlowButtons();
    updateActiveCard();
  }

  const applyForm = document.getElementById('applyForm');

  if (applyForm) {
    const saved = sessionStorage.getItem('applyFormData');
    if (saved) {
      const data = JSON.parse(saved);
      Object.keys(data).forEach((key) => {
        const field = applyForm.elements.namedItem(key);
        if (field) field.value = data[key];
      });
    }

    applyForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const data = Object.fromEntries(new FormData(applyForm).entries());
      sessionStorage.setItem('applyFormData', JSON.stringify(data));
      window.location.href = 'confirm/';
    });
  }

  const applyConfirm = document.getElementById('applyConfirm');

  if (applyConfirm) {
    const saved = sessionStorage.getItem('applyFormData');
    if (!saved) {
      window.location.href = '../';
    } else {
      const data = JSON.parse(saved);
      const categoryLabels = {
        transfer: '転職について相談したい',
        jobhunting: '就職について相談したい',
        introduction: '求人・企業を紹介してほしい',
        other: 'その他のご相談',
      };
      const summary = {
        applyConfirmName: data.name,
        applyConfirmAffiliation: data.affiliation || '未記入',
        applyConfirmEmail: data.email,
        applyConfirmTel: data.tel || '未記入',
        applyConfirmCategory: categoryLabels[data.category] || data.category,
        applyConfirmMessage: data.message,
      };
      Object.keys(summary).forEach((id) => {
        const el = document.getElementById(id);
        if (el) el.textContent = summary[id];
      });
    }

    const applySubmit = document.getElementById('applySubmit');
    if (applySubmit) {
      applySubmit.addEventListener('click', () => {
        window.location.href = '../complete/';
      });
    }
  }

  if (document.getElementById('applyComplete')) {
    sessionStorage.removeItem('applyFormData');
  }
