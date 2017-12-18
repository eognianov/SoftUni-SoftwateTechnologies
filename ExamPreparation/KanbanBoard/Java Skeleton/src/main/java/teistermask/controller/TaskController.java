package teistermask.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import teistermask.bindingModel.TaskBindingModel;
import teistermask.entity.Task;
import teistermask.repository.TaskRepository;

import java.util.List;

@Controller
public class TaskController {
	private final TaskRepository taskRepository;

	@Autowired
	public TaskController(TaskRepository taskRepository) {
		this.taskRepository = taskRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		List<Task> openTasks = this.taskRepository.findAllByStatus("Open");
		List<Task> finishedTasks=this.taskRepository.findAllByStatus("Finished");
		List<Task> inProgressTasks=this.taskRepository.findAllByStatus("In Progress");
		model.addAttribute("openTasks",openTasks);
		model.addAttribute("finishedTasks",finishedTasks);
		model.addAttribute("inProgressTasks",inProgressTasks);
		model.addAttribute("view","task/index");
		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		model.addAttribute("view","task/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, TaskBindingModel taskBindingModel) {
		Task newTask = new Task();
		newTask.setTitle(taskBindingModel.getTitle());
		newTask.setStatus(taskBindingModel.getStatus());
		taskRepository.saveAndFlush(newTask);
		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		Task task = this.taskRepository.findOne(id);
		if(task==null){
			return "redirect:/";
		}
		model.addAttribute("task",task);
		model.addAttribute("view","task/edit");
		return "base-layout";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(@PathVariable int id, TaskBindingModel taskBindingModel) {
		Task task = taskRepository.findOne(id);
		if(task==null){
			return "redirect:/";
		}
		task.setTitle(taskBindingModel.getTitle());
		task.setStatus(taskBindingModel.getStatus());
		taskRepository.saveAndFlush(task);
		return "redirect:/";
	}
}
