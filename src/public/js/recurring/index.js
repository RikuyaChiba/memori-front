const drag_containers = document.querySelectorAll('.recurring-items');

drag_containers.forEach(drag_container => {
  sortableCreate(drag_container);
});

function sortableCreate(drag_container) {
  Sortable.create(drag_container, {
    animation: 100,
    ghostClass: 'blue-background-class'
  });
}

