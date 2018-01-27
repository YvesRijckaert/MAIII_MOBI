const form = document.querySelector(`.filter-tag`);
const eventSection = document.querySelector(`.event-section`);
let searchTerm;
let nameOfDateSelected;
const eventsIdsToShow = [];
let resultsFromDataEvents = [];

const init = () => {
  //Progressive enhancement: AJAX tags: IF javascript works, this code will be executed:
  if (location.search === `?page=events`) { //if we're on the events page
    document.querySelector(`.submit-button`).classList.add(`hide`); //hide the submit button
    eventSection.innerHTML = ``; //clear the results generated from PHP
    form.addEventListener(`change`, submitHandler); //listen to the change event on dropdown menu
  }
};

const showResults = results => {
  eventSection.innerHTML = ``; //clear the results from previous searches
  results.forEach(event => {
    const $p = document.createElement(`p`);
    $p.textContent = event.title;
    eventSection.appendChild($p);
  });
};

const showTagResults = results => {
  eventSection.innerHTML = ``; //clear the results from previous searches
  results.forEach(result =>
    result.forEach(event => {
      const $p = document.createElement(`p`);
      $p.textContent = event.title;
      eventSection.appendChild($p);
    }
    )
  );
};

const parseTagData = data => {
  const eventsWithTheCorrectTags = data.map(event => event.tags.filter(eventtag => eventtag.tag === searchTerm));
  for (let i = eventsIdsToShow.length;i > 0;i --) { //clear the eventsToShow array
    eventsIdsToShow.pop(); //deletes last item of array
  }
  eventsWithTheCorrectTags.forEach(eventWithTheCorrectTag => eventWithTheCorrectTag.forEach(event => eventsIdsToShow.push(event.event_id))); //push the event id's of the events to show into an array
  const results = eventsIdsToShow.map(id => data.filter(data => data.id === id)); //get the event data from the event id that we need to show
  showTagResults(results);
};

const parseDatumData = data => {
  switch (nameOfDateSelected) {
  case `alles`: {
    resultsFromDataEvents = data;
  }
    break;
  case `zondag`: {
    const value1 = new Date(`2018-09-16 23:59:59`).getTime();
    const value2 = new Date(`2018-09-16 00:00:00`).getTime();
    resultsFromDataEvents = data.filter(d => {const start = new Date(d.start).getTime();const end = new Date(d.end).getTime();
      return (start <= value1 && end >= value2);
    });
  }
    break;
  case `maandag`: {
    const value1 = new Date(`2018-09-17 23:59:59`).getTime();
    const value2 = new Date(`2018-09-17 00:00:00`).getTime();
    resultsFromDataEvents = data.filter(d => {const start = new Date(d.start).getTime();const end = new Date(d.end).getTime();
      return (start <= value1 && end >= value2);
    });
  }
    break;
  case `dinsdag`: {
    const value1 = new Date(`2018-09-18 23:59:59`).getTime();
    const value2 = new Date(`2018-09-18 00:00:00`).getTime();
    resultsFromDataEvents = data.filter(d => {const start = new Date(d.start).getTime();const end = new Date(d.end).getTime();
      return (start <= value1 && end >= value2);
    });
  }
    break;
  case `woensdag`: {
    const value1 = new Date(`2018-09-19 23:59:59`).getTime();
    const value2 = new Date(`2018-09-19 00:00:00`).getTime();
    resultsFromDataEvents = data.filter(d => {const start = new Date(d.start).getTime();const end = new Date(d.end).getTime();
      return (start <= value1 && end >= value2);
    });
  }
    break;
  case `donderdag`: {
    const value1 = new Date(`2018-09-20 23:59:59`).getTime();
    const value2 = new Date(`2018-09-20 00:00:00`).getTime();
    resultsFromDataEvents = data.filter(d => {const start = new Date(d.start).getTime();const end = new Date(d.end).getTime();
      return (start <= value1 && end >= value2);
    });
  }
    break;
  case `vrijdag`: {
    const value1 = new Date(`2018-09-21 23:59:59`).getTime();
    const value2 = new Date(`2018-09-21 00:00:00`).getTime();
    resultsFromDataEvents = data.filter(d => {const start = new Date(d.start).getTime();const end = new Date(d.end).getTime();
      return (start <= value1 && end >= value2);
    });
  }
    break;
  case `zaterdag`: {
    const value1 = new Date(`2018-09-22 23:59:59`).getTime();
    const value2 = new Date(`2018-09-22 00:00:00`).getTime();
    resultsFromDataEvents = data.filter(d => {const start = new Date(d.start).getTime();const end = new Date(d.end).getTime();
      return (start <= value1 && end >= value2);
    });
  }
    break;
  }
  showResults(resultsFromDataEvents);
};

const submitHandler = e => {
  e.preventDefault();
  if (e.srcElement.type === `select-one`) { //if they are searching by tag
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
        parseTagData(jsonObj); //parse the JSON
      });
  } else if (e.srcElement.type === `radio`) { //if they are searching by date
    nameOfDateSelected = e.target.value;
    fetch(window.location.href, { //get the JSON from our database
      headers: new Headers({
        Accept: `application/json`
      }),
      credentials: `same-origin`,
      method: `get`,
    })
      .then(r => r.json())
      .then(jsonObj => {
        parseDatumData(jsonObj); //parse the JSON
      });
  }


};

init();
