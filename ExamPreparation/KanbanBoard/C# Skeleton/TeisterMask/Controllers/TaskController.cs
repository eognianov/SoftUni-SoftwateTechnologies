using System;
using System.Linq;
using System.Web.Mvc;
using TeisterMask.Models;

namespace TeisterMask.Controllers
{
        [ValidateInput(false)]
	public class TaskController : Controller
	{
        private TeisterMaskDbContext db = new TeisterMaskDbContext();
	    [HttpGet]
            [Route("")]
	    public ActionResult Index()
	    {
	        var test = db.Tasks.Where(t => t.Status == "Open").ToList();
	        var tasks = db.Tasks.ToList();
	        return View(tasks);
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
		public ActionResult Create(Task task)
		{
		    if (this.ModelState.IsValid)
		    {
		        db.Tasks.Add(task);
		        db.SaveChanges();
		        return RedirectToAction("Index");
		    }
		    return View();
		}

		[HttpGet]
		[Route("edit/{id}")]
        public ActionResult Edit(int id)
		{
		    var task = db.Tasks.Find(id);
		    if (task == null)
		    {
		        return HttpNotFound();
		    }
		    return View(task);
		}

		[HttpPost]
		[Route("edit/{id}")]
        [ValidateAntiForgeryToken]
		public ActionResult EditConfirm(int id, Task taskModel)
		{
		    var taskFromDb = db.Tasks.Find(id);
		    if (taskFromDb == null)
		    {
		        return HttpNotFound();
		    }
		    if (this.ModelState.IsValid)
		    {
		        taskFromDb.Title = taskModel.Title;
		        taskFromDb.Status = taskModel.Status;
		        db.SaveChanges();
		        return RedirectToAction("Index");
		    }
		    return Redirect($"/edit/{taskModel.Id}");
		}
	}
}