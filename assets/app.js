/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';
import 'bootstrap';
import bsCustomFileInput from 'bs-custom-file-input';

// start the Stimulus application
import './bootstrap';
bsCustomFileInput.init();


$(function () {
    $(".menu-link").click(function () {
     $(".menu-link").removeClass("is-active");
     $(this).addClass("is-active");
    });
   });
   
   $(function () {
    $(".main-header-link").click(function () {
     $(".main-header-link").removeClass("is-active");
     $(this).addClass("is-active");
    });
   });
   
   const dropdowns = document.querySelectorAll(".dropdown");
   dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("click", (e) => {
     e.stopPropagation();
     dropdowns.forEach((c) => c.classList.remove("is-active"));
     dropdown.classList.add("is-active");
    });
   });
   
   $(".search-bar input")
    .focus(function () {
     $(".header").addClass("wide");
    })
    .blur(function () {
     $(".header").removeClass("wide");
    });
   
   $(document).click(function (e) {
    var container = $(".status-button");
    var dd = $(".dropdown");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
     dd.removeClass("is-active");
    }
   });
   
   $(function () {
    $(".dropdown").on("click", function (e) {
     $(".content-wrapper").addClass("overlay");
     e.stopPropagation();
    });
    $(document).on("click", function (e) {
     if ($(e.target).is(".dropdown") === false) {
      $(".content-wrapper").removeClass("overlay");
     }
    });
   });
   
   $(function () {
    $(".status-button:not(.open)").on("click", function (e) {
     $(".overlay-app").addClass("is-active");
    });
    $(".pop-up .close").click(function () {
     $(".overlay-app").removeClass("is-active");
    });
   });
   
   $(".status-button:not(.open)").click(function () {
    $(".pop-up").addClass("visible");
   });
   
   $(".pop-up .close").click(function () {
    $(".pop-up").removeClass("visible");
   });
   
   const toggleButton = document.querySelector('.dark-light');
   
   toggleButton.addEventListener('click', () => {
     document.body.classList.toggle('light-mode');
   });

  //  ----header----

  var monBtnMenu = document.querySelector(".menuSelector");
  
  monBtnMenu.addEventListener("click", function(){
  console.log(monBtnMenu);

	var monContainer = document.querySelector(".main-header");
// var btnFermer = document.querySelector(".fas fa-times");
// var btnOuvert = document.querySelector(".fas fa-bars");
var btnOuvert = document.querySelector("body");
	
	if( monContainer.classList.contains('menuOuvert') ){
		// si menu fermé :
		monContainer.classList.remove('menuOuvert');
		btnOuvert.classList.add('men');
    // btnOuvert.classList.add('menuOuvert');
    // btnFermer.classList.remove('menuOuvert');
	}
	else {
		// si menu ouvert :
		monContainer.classList.add('menuOuvert');
    btnOuvert.classList.remove('men');
    // btnOuvert.classList.remove('menuOuvert');
    // btnFermer.classList.add('menuOuvert');
	}

});

// daouda 
$('.carousel').carousel({
  interval: 2000
})

class Acomponent extends React.Component {
	
	state = { colors: ["F65342","F69A42","2B8697","32BA50"], classs: [], currentSlice: 0, interval: ''};


	componentWillMount() {
    this.state.classs.push("active");
		this.setState({interval: setInterval(this.moveleft.bind(this),2000)});
	}

	moveleft() {
		const currentSlice = this.state.currentSlice;
    const nextSlice = (this.state.currentSlice == (this.state.colors.length-1)) ? 0 : (this.state.currentSlice+1);
    const newClass = [];
    newClass[currentSlice] = "removeImgLeft";
    newClass[nextSlice] = "addImgLeft";
    this.setState({classs:newClass,currentSlice:nextSlice});
	}

  moveright() {
		const currentSlice = this.state.currentSlice;
    const nextSlice = (this.state.currentSlice == 0) ? (this.state.colors.length-1) : (this.state.currentSlice-1);
    const newClass = [];
    newClass[currentSlice] = "removeImgRight";
    newClass[nextSlice] = "addImgRight";
    this.setState({classs:newClass,currentSlice:nextSlice});
	}

clickleft() {
   clearInterval(this.state.interval);
   this.moveright();
}

clickright() {
   clearInterval(this.state.interval);
   this.moveleft();
}

// Will Add Buttons Later

	render() {
		return (
      <div>
      <div className="carousel">
				<div className="directions">
					<a href="#" className="left" onClick={this.clickleft.bind(this)}> <img src="https://cdn0.iconfinder.com/data/icons/user-interface-6/100/ui-16-128.png" alt=""  /> </a>
					<a href="#" className="right" onClick={this.clickright.bind(this)}> <img src="https://cdn0.iconfinder.com/data/icons/user-interface-6/100/ui-16-128.png" alt=""  /> </a> 
				</div>
				 <div className="imgs">
					 {this.state.colors.map( (color, index) => { return <img className={`img ${this.state.classs[index]}`} src={`https://dummyimage.com/550x350/${color}/`} alt="img"/> } )}
				</div>
      </div>
        lorem
      </div>
		)
	}
	
};

ReactDOM.render(<Acomponent/>,document.getElementById('root'));