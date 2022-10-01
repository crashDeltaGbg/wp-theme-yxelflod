// console.log("hi from countdown timer");

const countdownTimer = document.getElementById("countdown-timer");
const canceledMessage = document.getElementById("canceled");
const canceledMessageState = canceledMessage.dataset.canceled;
const canceledMesageText = "canceled";

const dateTime = countdownTimer.dataset.event;

// console.log('date & time: ', dateTime);

// countdownTimer.innerHTML = dateTime;

let countdownDate = new Date(dateTime).getTime();

console.log(countdownDate);

const countdown = setInterval(() => {
  const now = new Date().getTime();

  const difference = countdownDate - now;

  const days = Math.floor(difference / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((difference % (1000 * 60)) / 1000);

  countdownTimer.innerHTML =
    days + "d " + hours + "h " + minutes + "m " + seconds + "s";

  if (difference < 0) {
    clearInterval(countdown);
    countdownTimer.innerHTML = "&#x1f973;";
  }
}, 1000);

if (canceledMessageState) {
  
  const typeOutMessage = () =>{
    let i = 0;
    if (i < canceledMesageText.length) {
      canceledMessage.innerHTML += canceledMesageText.charAt(i);
      i++
    } else {
      canceledMessage.innerHTML = '';
      i = 0;
    }
  };

  setInterval(typeOutMessage, 50);
}

/* -:[crashdelta]:- */
