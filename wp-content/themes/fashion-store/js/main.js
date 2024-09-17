const counterBox1 = document.querySelector('.data-box-1');
const counterBox2 = document.querySelector('.data-box-2');
const counterBox3 = document.querySelector('.data-box-3');

function animateValue(start, end, incrm, duration, elem) {
    const range = end - start;
    const increment = end > start ? incrm : -1;
    const stepTime = Math.abs(Math.floor(duration / range));
    let currentValue = start;
  
    const timer = setInterval(function() {
      currentValue += increment;
      elem.textContent = currentValue+'+';
      if (currentValue === end) {
        clearInterval(timer);
      }
    }, stepTime);
  }
  
  // Start the counter  
  animateValue(0, 200, 10, 3000, counterBox1);
  animateValue(0, 2000, 50, 3000, counterBox2);
  animateValue(0, 30000, 500, 5000, counterBox3);


  // Close the announcement bar
  document.querySelector('.announcement-close').addEventListener("click", function() {
    this.parentElement.parentElement.classList.toggle("disable-announcement");
  });

  // Open the Mobile Navigation
  document.querySelector(".mobile-menu").addEventListener("click", function(){
    if ( document.querySelector(".mobile-nav").classList.contains('mobile-nav-close')) {
      document.querySelector(".mobile-nav").classList.toggle("mobile-nav-close");
    }
    document.querySelector(".mobile-nav").classList.toggle("mobile-nav-open");       
  });

  // Close the Mobile Navigation
  document.querySelector(".mobile-nav-close-btn").addEventListener("click", function(){
    this.parentElement.classList.toggle("mobile-nav-open");
    this.parentElement.classList.toggle("mobile-nav-close");    
  });