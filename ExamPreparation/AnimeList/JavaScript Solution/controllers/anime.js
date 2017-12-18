const Anime = require('../models/Anime');

module.exports = {
	index: (req, res) => {
        Anime.find().then(animes => {
            return res.render('anime/index', {'animes': animes});
        }).catch(err => {
                return res.send("error");
        });
	},
	createGet: (req, res) => {
        res.render('anime/create');
	},
	createPost: (req, res) => {
        let anime = req.body;
        Anime.create(anime).then(anime => {
            res.redirect("/");
        }).catch(err => {
            film.error = 'Cannot create film.';
            res.render('anime/create', anime);
        });
	},
	deleteGet: (req, res) => {
        let id = req.params.id;
        Anime.findById(id).then(anime => {
            if (anime) {
                return res.render('anime/delete', anime);
            }
            else {
                return res.redirect('/');
            }
        }).catch(err => res.redirect('/'));
	},
	deletePost: (req, res) => {
        let id = req.params.id;
        Anime.findByIdAndRemove(id).then(data => {
            res.redirect('/');
        }).catch(err => res.redirect('/'));
	}
};