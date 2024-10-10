document.addEventListener("DOMContentLoaded", function () {
	/* initialize the external events
	-----------------------------------------------------------------*/

	var containerEl = document.getElementById("external-events-list");
	new FullCalendar.Draggable(containerEl, {
		itemSelector: ".fc-event",
		eventData: function (eventEl) {
			return {
				title: eventEl.innerText.trim(),
			};
		},
	});

	//// the individual way to do it
	// var containerEl = document.getElementById('external-events-list');
	// var eventEls = Array.prototype.slice.call(
	//   containerEl.querySelectorAll('.fc-event')
	// );
	// eventEls.forEach(function(eventEl) {
	//   new FullCalendar.Draggable(eventEl, {
	//     eventData: {
	//       title: eventEl.innerText.trim(),
	//     }
	//   });
	// });

	/* initialize the calendar
	-----------------------------------------------------------------*/

	var calendarEl = document.getElementById("draggableCalendar");
	var calendar = new FullCalendar.Calendar(calendarEl, {
		headerToolbar: {
			left: "prev,next today",
			center: "title",
			right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
		},
		initialDate: "2022-10-10",
		editable: true,
		droppable: true, // this allows things to be dropped onto the calendar
		drop: function (arg) {
			// is the "remove after drop" checkbox checked?
			if (document.getElementById("drop-remove").checked) {
				// if so, remove the element from the "Draggable Events" list
				arg.draggedEl.parentNode.removeChild(arg.draggedEl);
			}
		},
		// events: [
		// 	{
		// 		"title": "Botox Capilar",
		// 		"start": "2024-09-01"
		// 	},
		// 	{
		// 		"title": "Corte Feminino",
		// 		"start": "2024-09-01"
		// 	},
		// 	{
		// 		"title": "Escova Lisa",
		// 		"start": "2024-09-01"
		// 	},
		// 	{
		// 		"title": "Esmaltação Simples",
		// 		"start": "2024-09-02"
		// 	},
		// 	{
		// 		"title": "Manicure Russa",
		// 		"start": "2024-09-02"
		// 	},
		// 	{
		// 		"title": "Esmaltação em Gel",
		// 		"start": "2024-09-03"
		// 	},
		// 	{
		// 		"title": "Alongamento",
		// 		"start": "2024-09-03"
		// 	},
		// 	{
		// 		"title": "Dermaplaning Glow Up",
		// 		"start": "2024-09-04"
		// 	},
		// 	{
		// 		"title": "Microagulhamento",
		// 		"start": "2024-09-05"
		// 	},
		// 	{
		// 		"title": "Brow Lamination",
		// 		"start": "2024-09-06"
		// 	},
		// 	{
		// 		"title": "Design de Sobrancelhas",
		// 		"start": "2024-09-06"
		// 	},
		// 	{
		// 		"title": "Corte Feminino",
		// 		"start": "2024-09-07"
		// 	},
		// 	{
		// 		"title": "Escova Lisa",
		// 		"start": "2024-09-07"
		// 	},
		// 	{
		// 		"title": "Esmaltação Simples",
		// 		"start": "2024-09-08"
		// 	},
		// 	{
		// 		"title": "Banho de Gel",
		// 		"start": "2024-09-09"
		// 	},
		// 	{
		// 		"title": "Depilação Axila",
		// 		"start": "2024-09-10"
		// 	},
		// 	{
		// 		"title": "Depilação Buço",
		// 		"start": "2024-09-11"
		// 	},
		// 	{
		// 		"title": "Corte Feminino",
		// 		"start": "2024-09-12"
		// 	},
		// 	{
		// 		"title": "Escova Lisa",
		// 		"start": "2024-09-12"
		// 	},
		// 	{
		// 		"title": "Esmaltação em Gel",
		// 		"start": "2024-09-13"
		// 	},
		// 	{
		// 		"title": "Alongamento",
		// 		"start": "2024-09-14"
		// 	},
		// 	{
		// 		"title": "Botox Capilar",
		// 		"start": "2024-09-15"
		// 	},
		// 	{
		// 		"title": "Dermaplaning Glow Up",
		// 		"start": "2024-09-16"
		// 	},
		// 	{
		// 		"title": "Microagulhamento",
		// 		"start": "2024-09-17"
		// 	},
		// 	{
		// 		"title": "Manicure Russa",
		// 		"start": "2024-09-18"
		// 	},
		// 	{
		// 		"title": "Brow Lamination",
		// 		"start": "2024-09-19"
		// 	},
		// 	{
		// 		"title": "Design de Sobrancelhas",
		// 		"start": "2024-09-20"
		// 	},
		// 	{
		// 		"title": "Corte Feminino",
		// 		"start": "2024-09-21"
		// 	},
		// 	{
		// 		"title": "Escova Lisa",
		// 		"start": "2024-09-22"
		// 	},
		// 	{
		// 		"title": "Esmaltação Simples",
		// 		"start": "2024-09-23"
		// 	},
		// 	{
		// 		"title": "Banho de Gel",
		// 		"start": "2024-09-24"
		// 	},
		// 	{
		// 		"title": "Alongamento",
		// 		"start": "2024-09-25"
		// 	},
		// 	{
		// 		"title": "Botox Capilar",
		// 		"start": "2024-09-26"
		// 	},
		// 	{
		// 		"title": "Dermaplaning Glow Up",
		// 		"start": "2024-09-27"
		// 	},
		// 	{
		// 		"title": "Microagulhamento",
		// 		"start": "2024-09-28"
		// 	},
		// 	{
		// 		"title": "Manicure Russa",
		// 		"start": "2024-09-29"
		// 	},
		// 	{
		// 		"title": "Brow Lamination",
		// 		"start": "2024-09-30"
		// 	},
		// ],
	});
	calendar.render();

	// Adiciona um evento 26 segundos após o carregamento
	setTimeout(function () {
		// Evento que você deseja adicionar
		var newEvent = {
			title: "Manicure Russa",
			start: "2024-09-02T15:00:00" // Defina a data e hora conforme necessário
		};

		// Adiciona o evento ao calendário
		calendar.addEvent(newEvent);
		console.log("Novo evento adicionado:", newEvent);
	}, 26000); // 26 segundos

	setTimeout(function () {
		// Evento que você deseja adicionar
		var newEvent = {
			title: "Botox Capilar",
			start: "2024-09-02T16:00:00" // Defina a data e hora conforme necessário
		};

		// Adiciona o evento ao calendário
		calendar.addEvent(newEvent);
		console.log("Novo evento adicionado:", newEvent);
	}, 36000); // 26 segundos	
});
