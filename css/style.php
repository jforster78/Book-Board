<!-- <?PHP
  header("Content-type: text/css");
?> -->

/* FONTS */

@font-face {
  font-family: "title";
  font-style: normal;
  font-weight: 400;
  src: local("Parisienne"), 
  local("Parisienne-Regular"), 
  url(https://fonts.gstatic.com/s/parisienne/v6/E21i_d3kivvAkxhLEVZpQyhwCQ.woff) format("woff");
}
@font-face {
  font-family: "allOther";
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), 
  local('Poppins-Regular'), 
  url(https://fonts.gstatic.com/s/poppins/v11/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
}

/* STANDARD */

body {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-size: 16px;
  background-color: #eae7dc;
  color: #191919;
}
.grid__subheading {
  font-family: "allOther", serif;
  margin: 2rem 0;
  text-align: center;
}
.grid__subheading--margin {
  margin: 0;
}
.grid__subheading--left {
  text-align: left;
}
.grid__paragraph {
  font-family: "allOther", sans-serif;
  color: #8e8d8a;
  line-height: 2rem;
  text-align: center;
}
.grid__paragraph--colour {
  color: #eae7dc;
}
.grid__paragraph--left {
  text-align: initial;
  margin-bottom: 2rem; 
}

/* GRID LAYOUT */

.grid {
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 250px 
                      -webkit-min-content min-content 
                      -webkit-min-content min-content;
  grid-template-rows: 250px 
                      min-content 
                      min-content;
  grid-template-areas: "grid__slideShow"
                       "grid__holiday" 
                       "grid__holidayType" 
                       "grid__holidayOffer" 
                       "grid__search" 
                       "grid__about" 
                       "grid__form" 
                       "grid__profile" 
                       "grid__admin";
}
@media only screen and (min-width: 600px) {
  .grid {
    grid-template-rows: 600px 
                        -webkit-min-content min-content 
                        -webkit-min-content min-content;
    grid-template-rows: 600px 
                        min-content 
                        min-content;
  }
}
@media only screen and (min-width: 960px) {
  .grid {
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 500px 
                        -webkit-min-content min-content 
                        -webkit-min-content min-content;
    grid-template-rows: 500px 
                        min-content 
                        min-content;
    grid-template-areas: "grid__slideShow grid__slideShow" 
                         "grid__holiday grid__holiday" 
                         "grid__holidayType grid__holidayType" 
                         "grid__holidayOffer grid__holidayOffer" 
                         "grid__search grid__search" 
                         "grid__about grid__about" 
                         "grid__form grid__form" 
                         "grid__profile grid__profile" 
                         "grid__admin grid__admin";
  }
}

.grid__width {
  margin-left: 10%;
  margin-right: 10%;
  width: auto;
}

/* HEADER */

@media only screen and (min-width: 1024px) {
  .header__nav {
    width: 960px;
    margin: auto;
  }
}
@media only screen and (min-width: 1240px) {
  .header__nav {
    width: 1100px;
    margin: auto;
  }
}
@media only screen and (min-width: 1440px) {
  .header__nav {
    width: 1300px;
    margin: auto;
  }
}
.header__h1 {
  margin: 0;
}
.header__navlist {
  display: flex;
  justify-content: flex-start;
  flex-direction: column;
  list-style-type: none;
  margin: 0;
  padding: 0 1rem;
}
@media only screen and (min-width: 900px) {
  .header__navlist {
    flex-direction: row;
    background-color: #eae7dc;
  }
}
.header__navitem {
  font-family: "allOther", serif;
}
.header__navitem--left {
  font-family: "title", cursive;
  color: #eae7dc;
  padding: 0.75rem 0;
}
@media only screen and (min-width: 900px) {
  .header__navitem--left {
    padding: 1.5rem 0 1.5rem 1rem;
    flex-grow: 1;
  }
}
.header__link {
  text-decoration: none;
  color: #e85a4f;
}
.header__navlink {
  text-decoration: none;
  color: #e85a4f;
  border-bottom: 1px solid #e85a4f;
  display: none;
  padding: 1.5rem 0.5rem;
}
.header__navlink:hover {
  color: #586c8c;
}
@media only screen and (min-width: 900px) {
  .header__navlink {
    display: block;
    border-bottom: none;
    padding: 2rem 1rem;
  }
  .header__navlink:hover {
    color: #8e8d8a;
  }
}
.header__navlink--noborder {
  border-bottom: none;
}
.header__navbutton {
  align-self: flex-end;
  display: initial;
  position: absolute;
  cursor: pointer;
  right: 0.5rem;
  top: 0.8rem;
  font-size: 1.5rem;
  display: block;
}
@media only screen and (min-width: 900px) {
  .header__navbutton {
    display: none;
  }
}
.header__navbar1, 
.header__navbar2, 
.header__navbar3 {
  width: 25px;
  padding: 1px 0;
  margin: 7px;
  transition: 0.4s;
  background-color: #e85a4f;
}
.header__navbutton--change 
.header__navbar1 {
  -webkit-transform: rotate(-45deg) translate(-5px, 6px);
  transform: rotate(-45deg) translate(-5px, 6px);
}
.header__navbutton--change 
.header__navbar2 {
  opacity: 0;
}
.header__navbutton--change 
.header__navbar3 {
  -webkit-transform: rotate(45deg) translate(-6.75px, -8px);
  transform: rotate(45deg) translate(-6.75px, -8px);
}
.header__navshow {
  display: flex;
}

/* SLIDESHOW */

.grid__slideShow {
  grid-area: grid__slideShow;
}
.grid__slideContainer {
  position: relative;
  padding: 0;
  max-width: 100%;
  min-height: 100%;
}
.grid__image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.grid__slides {
  display: none;
}
.grid__number {
  color: #e85a4f;
  background-color: #eae7dc;
  border-radius: 20px;
  padding: 0.15rem 0.25rem;
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  z-index: 99;
}
.fade {
  -webkit-animation: fade 15s ease-out;
          animation: fade 15s ease-out;
}
@-webkit-keyframes fade {
    0%  {opacity: 0.2;}
    10% {opacity: 1;}
}
.next, 
.prev {
	position: absolute;
	display: initial;
	top: 42%;
	cursor: pointer;
	padding: 1rem 0.5rem;
	color: #eae7dc;
	border-radius: 0 5px 5px 0;
	transition: 0.6s ease;
}
.next--right {
	right: 0;
	border-radius: 3px 0 0 3px;
}
.next:hover, .prev:hover {
	background-color: #e85a4f;
}
@media only screen and (min-width: 700px) {
  .next, 
  .prev {
    padding: 3rem 2rem;
  }
}

/* INDEX PAGE MAIN */

.grid__holiday {
  grid-area: grid__holiday;
  background-color: #eae7dc;
}
.grid__holidayType {
  grid-area: grid__holidayType;
}
.grid__holidayOffer {
  grid-area: grid__holidayOffer;
}
.grid__holidayContainer, 
.grid__holidayTypeContainer, 
.grid__holidayOfferContainer {
  display: grid;
  grid-template-columns: 1fr;
  grid-gap: 2rem;
  padding: 1rem 2rem 2rem;
}
@media only screen and (min-width: 700px) {
  .grid__holiday, 
  .grid__holidayType, 
  .grid__holidayOffer,
  .grid__about,
  .grid__form {
    margin-left: 5%;
    margin-right: 5%;
  }
}
.grid__holidayPost {
  position: relative;
  text-align: center;
}
.grid__holidayPost:hover {
  opacity: 0.5;
}
.grid__holidayDetails {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #8e8d8a;
  background-color: #eae7dc;
  padding: 0.25rem 2rem;
  opacity: 0.7;
}
.grid__holidayTypePost  {
  background-color: #e85a4f;
}
.grid__header {
  font-family: "allOther", serif;
  margin: 0;
}
.grid__header--center {
  text-align: center;
  padding-top: 1rem;
}
.grid__clickOffer {
  padding: 1rem;
  background-color: #e85a4f;
  border-radius: 50%;
  color: #eae7dc;
  text-decoration: none;
}
@media only screen and (min-width: 600px) {
  .grid__holidayContainer, 
  .grid__holidayTypeContainer, 
  .grid__holidayOfferContainer {
    grid-template-columns: 1fr 1fr;
    padding: 1rem 4rem 4rem;
    grid-gap: 4rem;
  }
}
@media only screen and (min-width: 960px) {
  .grid__holidayContainer, 
  .grid__holidayOfferContainer  {
    grid-template-columns: 1fr 1fr 1fr;
  }
}
@media only screen and (min-width: 960px) {
.grid__holidayTypeContainer {
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
  }
}
@media only screen and (min-width: 600px) {
  .grid__holidayContainer--space, 
  .grid__holidayTypeContainer--space, 
  .grid__holidayOfferContainer--space {
    grid-template-columns: 1fr;
  }
}
@media only screen and (min-width: 960px) {
  .grid__holidayContainer--space, 
  .grid__holidayTypeContainer--space, 
  .grid__holidayOfferContainer--space {
    grid-template-columns: 1fr 1fr;
  }
}
.grid__holidayPost, 
.grid__holidayTypePost, 
.grid__holidayOfferPost  {
  -webkit-box-shadow: 0 2px 10px rgba(25, 25, 25, 0.5);
          box-shadow: 0 2px 10px rgba(25, 25, 25, 0.5);
}
.grid__holidayImage, 
.grid__holidayTypeImage, 
.grid__holidayOfferImage {
  width: 100%;
  display: block;
}

/* INDEX PAGE ANIMATION */

@keyframes fade-in {
    from {opacity: 0; transform: translate(0, 4rem)}
    to {opacity: 1;}
}
.fade-in-element {
  animation: fade-in 2s;
}
.hidden {
  opacity: 0;
}

/* ABOUT PAGE */

.grid__about {
  grid-area: grid__about;
  padding: 0 2rem;
}

/* CONTACT PAGE */

.grid__row {
  display: grid;
  grid-template-columns: 1fr;
}
.grid__formWrapper--adjust {
  margin-right: 0%;
  margin-left: 0%;
}
.grid__line {
  margin-bottom: 2rem;
}
.grid__listWrapper {
  margin-top: 2rem;
}
.grid__list {
  list-style-type: none;
  font-size: 13px;
}
.grid__hide {
  display: none;
}
@media only screen and (min-width: 700px) {
  .grid__row {
    grid-template-columns: 1fr 1fr;
  }
  .grid__formWrapper--adjust {
    margin-right: 0%;
    margin-left: 20%;
  }
  .grid__line {
    display: none;
  }
}

/* PROFILE PAGE */

.grid__profile {
  grid-area: grid__profile;
}
.grid__personal, .grid__history {
  font-family: "allOther";
  padding: 1rem;
  margin: .5rem auto;
  width: 77%;
}
.grid__paragraph--adjust {
  color: #191919;
  text-align: left;
  font-size: 14px;
}

/* ADMIN PAGE */

.grid__admin {
  grid-area: grid__admin;
}

/* FORMS */

.grid__form {
  grid-area: grid__form;
  text-align: initial;
  margin-left: 5%;
  margin-right: 5%;
  width: 90%;
}
.grid__paragraph--bottom {
  margin-bottom: 2rem;
}
.grid__formFieldset {
  border: none;
  margin-top: 0.5rem;
  padding: 0 0 2rem;
}
@media only screen and (min-width: 700px){
  .grid__formFieldset {
    margin-left: 10%;
    margin-right: 10%;
    width: 80%;
  }
}
@media only screen and (min-width: 1024px){
  .grid__formFieldset {
    margin-left: 0%;
    margin-right: 0%;
    width: 100%;
  }
}
.grid__formLegend {
  font-family: "allOther", serif;
  font-size: 16px;
  text-align: center;
  margin: 2rem 0;
}
@media only screen and (min-width: 800px){
  .grid__formWrapper {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 23px;
    margin: 0;
  }
}
@media only screen and (min-width: 760px){
  .grid__formWrapper--center {
    margin-right: 25%;
    margin-left: 25%;
  }
}
@media only screen and (min-width: 1024px){
  .grid__formWrapper {
    margin-right: 35%;
    margin-left: 35%;
  }
  .grid__formWrapper--search {
    margin-left: 10%;
    margin-right: 10%;
  }
}
.grid__formInput[type="text"], 
.grid__formInput[type="email"], 
.grid__formInput[type="tel"], 
.grid__formInput[type="password"], 
.grid__formTextarea {
  background-color: #eae7dc;
  width: 100%;
  padding: 12px;
  margin-bottom: 1rem;
  border: 1px solid #8e8d8a;
  border-radius: 4px;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  resize: vertical;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.grid__formInput[type="text"]:focus, 
.grid__formInput[type="email"]:focus, 
.grid__formInput[type="tel"]:focus, 
.grid__formTextarea:focus, 
.grid__formInput[type="password"]:focus {
  outline: 2px solid #e85a4f;
}
.grid__formTextarea {
  resize: none;
}
.grid__formButton {
  background-color: #e98074;
  color: #eae7dc;
  padding: 12px 20px;
  margin-bottom: 1rem;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  font-weight: 600;
  width: 100%;
  outline: 0;
  text-align: center;
}
.grid__formButton:hover {
  background-color: #e85a4f;
}
@media only screen and (min-width: 600px) {
  .grid__formButton {
    width: 50%;
  }
}
@media only screen and (min-width: 1440px) {
  .grid__formButton {
    width: 30%;
  }
}
@media only screen and (min-width: 600px) {
  .grid__formButton--search {
    width: 100%;
  }
}
.grid__formRow--full {
  grid-column: 1 / 3;
}
.grid__formRow {
  margin: 0;
}
.grid__formRow--search {
  display: grid;
  grid-template-columns: 1fr;
}
.grid__formRow--margin {
  margin-top: 1rem;
}
@media only screen and (min-width: 700px) {
  .grid__formRow--search {
    display: grid;
    grid-template-columns: 2fr 2fr 2fr 1fr;
    grid-gap: 1rem;
  }
}
.grid__links {
  color: #e85a4f;
}
.grid__links:hover {
  color: #8e8d8a;
}
.grid__errorMsg {
  font-family: "allOther";
  color: #ff0000;
}
.grid__successMsg {
  font-family: "allOther";
  color: #526F35;
  padding: 0.5rem 0;
}

/* SEARCH, PROFILE AND ADMIN TABLES */

.grid__table {
  margin-left: 10%;
  margin-right: 10%;
  width: 80%;
  margin: 3rem auto;
}
.grid__table--search {
  margin: 0 auto 3rem;
  width: 0;
}
@media only screen and (min-width: 700px) {
  .grid__table--search {
    width: 90%;
  }
}
.grid__tableRow > th, td{
  padding: .5rem;
  font-family: "allOther";
  font-size: 14px;
  width: 2000px;
  color: #eae7dc;
}
.grid__tableRow {
  background-color: #e85a4f;
}
.grid__table tr:nth-child(odd) {
  background-color: #e85a4f;
}
.grid__table tr:nth-child(even) {
  background-color: #e98074;
}
@media only screen and (min-width: 700px) {
  .grid__tableRow > th {
    padding: 1rem;
  }
  td {
    padding: 0.75rem;
  }
}
.grid__logout--float {
  display: block;
}

/* LOGOUT BUTTON */

.grid__logout > a {
  text-decoration: none;
  background-color: #e98074;
  color: #eae7dc;
  padding: 0.75rem 7.4rem;
  margin-bottom: 1rem;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  -webkit-appearance: none;
    -moz-appearance: none;
          appearance: none;
  font-weight: 600;
  width: 100%;
  outline: 0;
}
.grid__logout > a:hover {
  background-color: #e85a4f;
}
@media only screen and (min-width: 1024px) {
  .grid__logout > a {
    padding: 0.65rem 2rem;
  }
}
.grid__logout {
  font-family: "allOther";
  text-align: center;
  margin-bottom: 3rem;
}

/* TO THE TOP */

.backToTheTop {
  display: none;
  position: fixed;
  bottom: 6rem;
  right: 1rem;
  opacity: 0.8;
  cursor: pointer;
  background-color: #e85a4f;
  padding: 1.2rem 1rem 0.5rem;
  border-radius: 50%;
}
.backToTheTop__button {
  border: solid #eae7dc;
  border-width: 3px 0 0 3px;
  display: inline-block;
  padding: 0.4rem;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

/* FOOTER */

.footer {
  font-family: "allOther", sans-serif;
  text-align: center;
  color: #eae7dc;
  background-color: #393939;
  padding: 8rem 0;
  -webkit-box-shadow: 0 2px 10px rgba(25, 25, 25, 0.5);
          box-shadow: 0 2px 10px rgba(25, 25, 25, 0.5);
}
.footer__links {
  text-decoration: none;
  color: #eae7dc;
}
.footer__links:hover {
  text-decoration: underline;
}
.footer__copyright {
  font-size: 90%;
}