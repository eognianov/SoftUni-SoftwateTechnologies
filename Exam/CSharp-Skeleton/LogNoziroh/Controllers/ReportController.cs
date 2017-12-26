namespace LogNoziroh.Controllers
{
    using System.Collections.Generic;
    using System.Linq;
    using System.Web.Mvc;
    using Models;

    [ValidateInput(false)]
    public class ReportController : Controller
    {
        private LogNozirohDbContext db = new LogNozirohDbContext();
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            var reports = db.Reports.ToList();
            return View(reports);
        }

        [HttpGet]
        [Route("details/{id}")]
        public ActionResult Details(int id)
        {
            var report = db.Reports.Find(id);
            return View(report);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Report report)
        {
            db.Reports.Add(report);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int id)
        {
            var report = db.Reports.Find(id);
            return View(report);
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id, Report reportModel)
        {
            var reportFromDb = db.Reports.Find(id);
            db.Reports.Remove(reportFromDb);
            db.SaveChanges();
            return RedirectToAction("Index");
        }
    }
}