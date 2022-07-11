<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.contact-btn {
  display: flex;
  height: 4rem;
  width: 4rem;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  border: 1px solid white;
  background: #000;
  /*background-image: linear-gradient(to left, #24145c, #9d0707);*/
  color: whitesmoke;
  font-size: 3rem;
  padding: 0.25rem;
  text-align: center;
  -webkit-box-shadow: 0.1rem 0.3rem 0.3rem rgba(0, 0, 0, 0.5);
          box-shadow: 0.1rem 0.3rem 0.3rem rgba(0, 0, 0, 0.5);
  position: fixed;
  right: 1rem;
  bottom: 2rem;
  cursor: pointer;
  z-index: 999;
  -webkit-transition: 0.5s ease-in-out all;
  transition: 0.5s ease-in-out all;
}

.contact-btn:hover {
  -webkit-box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
          box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
}

.all-btns {
  display: none;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  position: fixed;
  right: 1rem;
  bottom: 2rem;
  cursor: pointer;
  z-index: 999;
  -webkit-transition: 0.5s ease-in-out all;
  transition: 0.5s ease-in-out all;
}

.all-btns .contact-logo {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 3.5rem;
  width: 3.5rem;
  font-size: 2.25rem;
  border-radius: 50%;
  color: whitesmoke;
  text-align: center;
  margin: 0.5rem auto;
  -webkit-transition: 0.5s ease-in-out all;
  transition: 0.5s ease-in-out all;
  -webkit-box-shadow: 0.1rem 0.3rem 0.3rem rgba(0, 0, 0, 0.5), -0.1rem -0.3rem 0.3rem rgba(0, 0, 0, 0.5);
          box-shadow: 0.1rem 0.3rem 0.3rem rgba(0, 0, 0, 0.5), -0.1rem -0.3rem 0.3rem rgba(0, 0, 0, 0.5);
}

.all-btns .contact-logo a {
  display: block;
  color: whitesmoke;
  text-decoration: none;
}

.all-btns .contact-logo:nth-of-type(1) {
  background: #4267B2;
}

.all-btns .contact-logo:nth-of-type(1):hover {
  -webkit-box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
          box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
}

.all-btns .contact-logo:nth-of-type(2) {
  background: #16c79a;
}

.all-btns .contact-logo:nth-of-type(2):hover {
  -webkit-box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
          box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
}

.all-btns .contact-logo:nth-of-type(3) {
  background: dodgerblue;
}

.all-btns .contact-logo:nth-of-type(3):hover {
  -webkit-box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
          box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
}

.all-btns .contact-logo:nth-of-type(4) {
  background: #e41749;
}

.all-btns .contact-logo:nth-of-type(4):hover {
  -webkit-box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
          box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
}

.all-btns .contact-logo:nth-of-type(5) {
  background: #fc5185;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.all-btns .contact-logo:nth-of-type(5):hover {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}

</style>
<div class="contact-btn" id="contact-btn">
    <div class="contact-logo">
        <i class="fa fa-comments" aria-hidden="true"></i>
    </div>
</div>

<div class="all-btns" id="all-btns">
    <div class="contact-logo">
        <a href="https://www.facebook.com/51International/" target="_blank"><i class="fa fa-facebook"
                aria-hidden="true"></i></a>
    </div>
    <div class="contact-logo">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=9999995151"><i class="fa fa-whatsapp"
                aria-hidden="true"></i></a>
    </div>
    <div class="contact-logo">
        <a target="_blank" href="tel:9999995151"><i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
    <div class="contact-logo">
        <a target="_blank" href="mailto:info@51intl.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
    </div>
    <div class="contact-logo" id="close-btn">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
</div>
<script>
const contactBtn = document.querySelector('#contact-btn');
const allBtns = document.querySelector('#all-btns');
const closeBtn = document.querySelector('#close-btn');

contactBtn.addEventListener('click', () => {
    allBtns.style.display = "flex";
    contactBtn.style.display = "none";
});

closeBtn.addEventListener('click', () => {
    allBtns.style.display = "none";
    contactBtn.style.display = "flex";
});
</script>
