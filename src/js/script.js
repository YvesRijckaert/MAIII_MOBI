const form = document.querySelector(`.filter-tag`);
const eventSection = document.querySelector(`.event-section`);
let searchTerm;
let results;

const init = () => {
  //Progressive enhancement: AJAX tags: IF javascript works, this code will be executed:
  if (location.search === `?page=events`) { //if we're on the events page
    document.querySelector(`.submit-button`).classList.add(`hide`); //hide the submit button
    eventSection.innerHTML = ``;
    form.addEventListener(`change`, submitHandler); //listen to the change event
  }
};

const parseData = data => {
  results = data;
  console.log(results);
  console.log(searchTerm);
};

const submitHandler = e => {
  searchTerm = e.target.value;
  e.preventDefault();
  fetch(window.location.href, {
    headers: new Headers({
      Accept: `application/json`
    }),
    credentials: `same-origin`,
    method: `post`,
  })
    .then(r => r.json())
    .then(jsonObj => {
      parseData(jsonObj);
    });

};

init();
