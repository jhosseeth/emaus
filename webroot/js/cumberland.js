$( document ).ready(function() {

	// Initializing all tooltips on page
	$('[data-toggle="tooltip"]').tooltip();


	//==============================================================
	//							CHARTS
	//==============================================================
	// Miembros
	var membersSelector = $("#membersChart");
	var membersChart = new Chart(membersSelector, {
	    type: 'doughnut',
	    data: {
	        labels: ["Miembros activos", "Miembros inactivos"],
	        datasets: [{
	            data: [35, 19],
	            backgroundColor: [
	                '#66c2ff',
	                '#006bb3'
	            ]
	        }]
	    },
	    options: {
	        title: {
	            display: true,
	            text: 'Cantidad de miembros'
	        },
	        legend: {
	            display: false
	        }
    	}
	});

	// Promedio general de asistencias
	var assistsSelector = $("#assistsChart");
	var assistsChart = new Chart(assistsSelector, {
	    type: 'doughnut',
	    data: {
	        labels: ["Miembros activos", "Miembros inactivos", "No miembros"],
	        datasets: [{
	            data: [25, 15, 48],
	            backgroundColor: [
	                '#ffcc66',
	                '#ff8533',
	                '#993300'
	            ]
	        }]
	    },
	    options: {
	        title: {
	            display: true,
	            text: 'Promedio de asistentes'
	        },
	        legend: {
	            display: false
	        }
    	}
	});

	// Asistencias miembros activos
	var actMemAssistsSelector = $("#actMemAssistsChart");
	var actMemAssistsChart = new Chart(actMemAssistsSelector, {
	    type: 'radar',
	    data: {
	        labels: ["Niños", "Adolescentes", "Jovenes", "Adultos", "Ancianos"],
	        datasets: [{
	            data: [0, 2, 12, 10, 6],
	            backgroundColor: [
	                'rgba(255, 99, 132, 0.2)'
	            ],
	            borderColor: [
	                'rgba(255,99,132,1)'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        title: {
	            display: true,
	            text: 'Miembros activos'
	        },
	        legend: {
	            display: false
	        }
    	}
	});

	// Asistencias miembros inactivos
	var inactMemAssistsSelector = $("#inactMemAssistsChart");
	var inactMemAssistsChart = new Chart(inactMemAssistsSelector, {
	    type: 'radar',
	    data: {
	        labels: ["Niños", "Adolescentes", "Jovenes", "Adultos", "Ancianos"],
	        datasets: [{
	            data: [0, 5, 7, 10, 11],
	            backgroundColor: [
	                'rgba(75, 192, 192, 0.2)'
	            ],
	            borderColor: [
	                'rgba(75, 192, 192, 1)'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        title: {
	            display: true,
	            text: 'Miembros inactivos'
	        },
	        legend: {
	            display: false,
	            labels: {
	                fontSize: 14
	            }
	        }
    	}
	});

	// Asistencias no miembros
	var noMemAssistsSelector = $("#noMemAssistsChart");
	var noMemAssistsChart = new Chart(noMemAssistsSelector, {
	    type: 'radar',
	    data: {
	        labels: ["Niños", "Adolescentes", "Jovenes", "Adultos", "Ancianos"],
	        datasets: [{
	            data: [25, 15, 12, 30, 8],
	            backgroundColor: [
	                'rgba(255, 159, 64, 0.2)'
	            ],
	            borderColor: [
	                'rgba(255, 159, 64, 1)'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        title: {
	            display: true,
	            text: 'No miembros'
	        },
	        legend: {
	            display: false
	        }
    	}
	});

});