const form = document.querySelector(`.filter-tag`);
const eventSection = document.querySelector(`.event-section`);
let searchTerm;
const eventsIdsToShow = [];

const init = () => {
  //Progressive enhancement: AJAX tags: IF javascript works, this code will be executed:
  if (location.search === `?page=events`) { //if we're on the events page
    document.querySelector(`.submit-button`).classList.add(`hide`); //hide the submit button
    eventSection.innerHTML = ``; //clear the results generated from PHP
    form.addEventListener(`change`, submitHandler); //listen to the change event on dropdown menu
  }
};

const parseData = data => {
  const eventsWithTheCorrectTags = data.map(event => event.tags.filter(eventtag => eventtag.tag === searchTerm));
  for (let i = eventsIdsToShow.length;i > 0;i --) { //clear the eventsToShow array
    eventsIdsToShow.pop(); //deletes last item of array
  }
  eventsWithTheCorrectTags.forEach(eventWithTheCorrectTag => eventWithTheCorrectTag.forEach(event => eventsIdsToShow.push(event.event_id))); //push the event id's of the events to show into an array
  const results = eventsIdsToShow.map(id => data.filter(data => data.id === id)); //get the event data from the event id that we need to show
  console.log(results);
};

const submitHandler = e => {
  e.preventDefault();
  searchTerm = e.target.value; //get current search term
  fetch(window.location.href, { //get the JSON from our database
    headers: new Headers({
      Accept: `application/json`
    }),
    credentials: `same-origin`,
    method: `post`,
  })
    .then(r => r.json())
    .then(jsonObj => {
      parseData(jsonObj); //parse the JSON
    });

};

init();
