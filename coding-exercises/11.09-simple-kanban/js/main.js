import KanbanAPI from "./api/KanbanAPI.js";

// console.log(KanbanAPI.insertItem(2, "I am new!"));

KanbanAPI.updateItem(45033, {
	columnId: 1,
	position: 0
});