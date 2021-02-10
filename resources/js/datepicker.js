import DateRangePicker from "vanillajs-datepicker/DateRangePicker";

const elem = document.getElementById("datepicker");

const rangepicker = new DateRangePicker(elem, {
	// ...options
	format        : "yyyy-mm-dd",
	datesDisabled : bookedDates,
	minDate       : new Date(),
	maxDate       : new Date(new Date().setFullYear(new Date().getFullYear() + 1))
});

console.log(bookedDates);
