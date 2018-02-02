const dateFormat = require(`dateformat`);

const form = document.querySelector(`.filter-tag`);
const eventSection = document.querySelector(`.event-results`);
let searchTerm;
let nameOfDateSelected;
const eventsIdsToShow = [];
let resultsFromDataEvents = [];
const isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === `[object SafariRemoteNotification]`; })(!window[`safari`] || (typeof safari !== `undefined` && safari.pushNotification)); // eslint-disable-line


const init = () => {
  /*Progressive enhancement: AJAX tags: IF javascript works, this code will be executed:*/
  if (location.search === `?page=events`) { //if we're on the events page
    if (isSafari) {
      return; //disable in safari :(
    }
    document.querySelector(`.submit-button`).classList.add(`hide`); //hide the submit button
    form.addEventListener(`change`, submitHandler); //listen to the change event on dropdown menu
  }
};

const showResults = results => {
  eventSection.innerHTML = `<p class="event-count">Aantal resultaten: ${results.length}</p>`; //clear the results from previous searches
  results.forEach(event => {
    const $a = document.createElement(`a`);
    $a.setAttribute(`href`, `index.php?page=detail&id=${event.id}`);
    $a.classList.add(`activity-link`);
    $a.innerHTML = `
        <article class="activity-item">
        <picture class="activity-image">
        <source media="(min-width: 1440px)" srcset="assets/img/${event.code}/full.webp" type="image/webp"/>
        <source media="(min-width: 1440px)" srcset="assets/img/${event.code}/full.jpg" />
        <source media="(min-width: 1024px)" srcset="assets/img/${event.code}/medium.webp"  type="image/webp" />
        <source media="(min-width: 1024px)" srcset="assets/img/${event.code}/medium.jpg" />
        <source media="(min-width: 768px)" srcset="assets/img/${event.code}/small.webp"  type="image/webp" />
        <source media="(min-width: 768px)" srcset="assets/img/${event.code}/small.jpg" />
        <source media="(min-width: 320px)" srcset="assets/img/${event.code}/mini.webp"  type="image/webp" />
        <source media="(min-width: 320px)" srcset="assets/img/${event.code}/mini.jpg" />
        <img class="activity-image"
        srcset="assets/img/${event.code}/full.jpg,
                assets/img/${event.code}/medium.jpg,
                assets/img/${event.code}/small.jpg,
                assets/img/${event.code}/mini.jpg"
        alt="${event.title}" />
        </picture>
        <ul class="activity-tags">
                  <li class="activity-tag">${event.tags[0].tag}</li>
                  <li class="activity-tag">${event.tags[1].tag}</li>
                  <li class="activity-tag">${event.tags[2].tag}</li>
              </ul>
        <div class="activity-info">
          <h3 class="activity-title">${event.title}</h3>
          <p class="activity-time">${dateFormat(event.start, `dd/mm`)} ${dateFormat(event.start, `dd/mm`) !== dateFormat(event.end, `dd/mm`) ? ` tot ${dateFormat(event.start, `dd/mm`)}` : ``}</p>
          <p class="activity-place">${event.city}</p>
        </div>
      </article>`;
    eventSection.appendChild($a);
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
  if (e.target.type === `select-one`) { //if they are searching by tag
    searchTerm = e.target.value; //get current search term
    fetch(window.location.href, { //get the JSON from our database
      headers: new Headers({
        Accept: `application/json`
      }),
      credentials: `same-origin`,
      method: `post`,
      mode: `cors`,
    })
      .then(r => r.json())
      .then(jsonObj => {
        parseTagData(jsonObj); //parse the JSON
      });
  } else if (e.target.type === `radio`) { //if they are searching by date
    nameOfDateSelected = e.target.value;
    fetch(window.location.href, { //get the JSON from our database
      headers: new Headers({
        Accept: `application/json`
      }),
      credentials: `same-origin`,
      method: `get`,
      mode: `cors`,
    })
      .then(r => r.json())
      .then(jsonObj => {
        parseDatumData(jsonObj); //parse the JSON
      });
  }


};

init();
