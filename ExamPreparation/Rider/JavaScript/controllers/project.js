const Project = require('../models/Project');

module.exports = {
    index: (req, res) => {
        Project.find().then(projects => {
        return res.render('project/index', {'projects': projects});
        }).catch(err => {
            return res.send("error");
        }); 
    },
    createGet: (req, res) => {
        res.render('project/create');
    },
    createPost: (req, res) => {
        let project = req.body;
        Project.create(project).then(project =>{res.redirect("/");})
    },
    editGet: (req, res) => {
        let projectId = req.params.id;
        Project.findById(projectId).then(project => res.render('project/edit',project))
    },
    editPost: (req, res) => {
        let projectId = req.params.id;
        let project = req.body;
        Project.findByIdAndUpdate(projectId,project, {runValidators: true}).then(film=>res.redirect('/'));
    },
    deleteGet: (req, res) => {
        let id = req.params.id;
        Project.findById(id).then(project => {return res.render("project/delete",project)});
    },
    deletePost: (req, res) => {
        let id = req.params.id;
        Project.findByIdAndRemove(id).then(data=>{res.redirect("/")});
    }
};