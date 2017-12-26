const Report = require('../models/Report');

module.exports = {
    index: (req, res) => {
        Report.find().then(reports => {
            return res.render('report/index', {'reports': reports});
        }).catch(err => {
            return res.send("error");
        });
    },
    createGet: (req, res) => {
        res.render('report/create');
    },
    createPost: (req, res) => {
        let report = req.body;
        Report.create(report).then(report => {
            res.redirect("/");
        });
    },
    detailsGet: (req, res) => {
        let reportId = req.params.id;
        Report.findById(reportId).then(report => res.render("report/details", report));
    },
    deleteGet: (req, res) => {
        let reportId = req.params.id;
        Report.findById(reportId).then(report=> res.render("report/delete", report));
    },
    deletePost: (req, res) => {

        let id = req.params.id;
        Report.findByIdAndRemove(id).then(data => {
            res.redirect('/');
        }).catch(err => res.redirect('/'));
    }
};