import "../Css/styles.css";


// Modules
import search from './modules/Search';
import cards from './modules/Cards';


// Instantiate a new object using our modules / classes
const theSearch = new search();
const Cards = new cards();

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}