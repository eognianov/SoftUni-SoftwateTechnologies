const mongoose = require('mongoose');

let animeSchema = mongoose.Schema({
    name: {type: 'string', required: 'true'},
    description: {type: 'string', required: 'true'},
    watched: {type: 'string', required: 'true'},
    rating: {type: 'number', required: 'true'}
});

let Anime = mongoose.model('Anime', animeSchema);

module.exports = Anime;