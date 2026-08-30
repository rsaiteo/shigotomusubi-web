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

