/**
 * Countdown Timer
 */

document.addEventListener('DOMContentLoaded', function() {
    const countdownEl = document.querySelector('[data-countdown]');
    
    if (!countdownEl) return;
    
    const deadline = countdownEl.getAttribute('data-countdown');
    const daysEl = countdownEl.querySelector('.countdown-days');
    const hoursEl = countdownEl.querySelector('.countdown-hours');
    const minutesEl = countdownEl.querySelector('.countdown-minutes');
    const secondsEl = countdownEl.querySelector('.countdown-seconds');
    
    function updateCountdown() {
        const time = Date.parse(deadline) - Date.now();
        
        if (time <= 0) {
            daysEl.textContent = '00';
            hoursEl.textContent = '00';
            minutesEl.textContent = '00';
            secondsEl.textContent = '00';
            return;
        }
        
        const days = Math.floor(time / (1000 * 60 * 60 * 24));
        const hours = Math.floor((time / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((time / 1000 / 60) % 60);
        const seconds = Math.floor((time / 1000) % 60);
        
        daysEl.textContent = days < 10 ? '0' + days : days;
        hoursEl.textContent = hours < 10 ? '0' + hours : hours;
        minutesEl.textContent = minutes < 10 ? '0' + minutes : minutes;
        secondsEl.textContent = seconds < 10 ? '0' + seconds : seconds;
    }
    
    updateCountdown();
    setInterval(updateCountdown, 1000);
});











