var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('Creating...')
    .pauseFor(2500)
    .deleteChars(3)
    .typeString(' wonderful code')
    .pauseFor(2500)
    .deleteChars(15)
    .typeString(' bold ideas')
    .pauseFor(2500)
    .deleteChars(11)
    .typeString(' a better future')
    .pauseFor(2500)
    .deleteAll()
    .start();