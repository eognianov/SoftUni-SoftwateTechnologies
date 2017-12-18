const Task = require('../models/Task');

module.exports = {
    index: (req, res) => {
        Task.find().then(tasks => {
                return res.render('task/index', {'tasks': tasks});
        }).catch(err => {
            return res.send("error");
        });
    },
	createGet: (req, res) => {
        res.render('task/create');
	},
	createPost: (req, res) => {
        let task = req.body;
        Task.create(task).then(task=>{
        	res.redirect("/");
		})
	},
	deleteGet: (req, res) => {
        let taskId = req.params.id;
        Task.findById(taskId).then(task => {
            if (task) {
                res.render('task/delete', task );
            }
            else {
                res.redirect('/');
            }
        }).catch(err => res.redirect('/'));
	},
	deletePost: (req, res) => {
        let taskId = req.params.id;
        let task = req.body;
        Task.findByIdAndRemove(taskId).then(task=>
        {res.redirect("/")})
	}
};