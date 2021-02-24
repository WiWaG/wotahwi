import flatpickr from "flatpickr";
import { Dutch } from "flatpickr/dist/l10n/nl.js";
flatpickr.localize(Dutch);
import rangePlugin from "flatpickr/dist/plugins/rangePlugin";

// Setup datepicker with blocked dates for selected room

const roomSelect = document.querySelector("#room-select");

let blockedDates = bookedDates[roomSelect.value];

let datepicker = flatpickr("#start-date", {
	plugins    : [
		rangePlugin({
			input : "#end-date"
		})
	],
	mode       : "range",
	minDate    : "today",
	dateFormat : "d-m-Y",
	disable    : blockedDates
});

// Update datepicker for a change of selected room
roomSelect.addEventListener("change", () => {
	blockedDates = bookedDates[roomSelect.value];
	datepicker.set("disable", blockedDates);
});
