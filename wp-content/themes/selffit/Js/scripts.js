import "../Css/style.css";


// Modules
import search from './modules/Search';


// Instantiate a new object using our modules / classes
const theSearch = new search();

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}