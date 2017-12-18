using System.Linq;
using System.Web.Mvc;
using ShoppingList.Models;

namespace ShoppingList.Controllers
{
    [ValidateInput(false)]
    public class ProductController : Controller
    {
        private ShoppingListDbContext db = new ShoppingListDbContext();


        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            var products = db.Products.ToList();
            return View(products);
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
        public ActionResult Create(Product product)
        {
            if (this.ModelState.IsValid)
            {
                db.Products.Add(product);
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(product);
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            var product = db.Products.Find(id);
            if (product == null)
            {
                return HttpNotFound();
            }
            return View(product);
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Product productModel)
        {
            var productFromDb = db.Products.Find(id);
            if (productFromDb == null)
            {
                return HttpNotFound();
            }
            if (this.ModelState.IsValid)
            {
                productFromDb.Name = productModel.Name;
                productFromDb.Priority = productModel.Priority;
                productFromDb.Quantity = productModel.Quantity;
                productFromDb.Status = productModel.Status;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return Redirect($"/edit/{productModel.Id}");
        }
    }
}