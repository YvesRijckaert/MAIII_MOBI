const form = document.querySelector(`.filter-tag`);

const init = () => {
  if (location.search === `?page=events`) { //if we're on the events page
    form.addEventListener(`change`, submitHandler);
  }
};

const parseData = data => {
  console.log(data);
};

const submitHandler = e => {
  e.preventDefault();

  fetch(window.location.href, { //laad de huidige pagina
    headers: new Headers({
      Accept: `application/json` //accepteer JSON
    }),
    credentials: `same-origin`, //zelfde pagina
    method: `post`, //POST methode
  })
    .then(r => r.json()) //de response is JSON
    .then(jsonObj => {
      parseData(jsonObj);
    });

};

init();
