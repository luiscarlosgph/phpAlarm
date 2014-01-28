/**
 * phpAlarm v0.1
 * 
 * @brief Client side UI handling.  
 *
 * Author: Luis Carlos Garcia-Peraza Herrera (luiscarlos.gph@gmail.com)
 * Date  : January 24, 2014.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 */

// Functions

/**
 * Adds one hour to the hour input box. 24h format.
 * @param[in] hourId Id of the hour input box to be modified.
 * @returns Nothing.
 */
function hourPlusOne(hourId) {
	if (isNaN(document.getElementById(hourId).value))
		document.getElementById(hourId).value = '00';
	else if (document.getElementById(hourId).value == 23)
		document.getElementById(hourId).value = '00'; 
	else 
		document.getElementById(hourId).value++;
	if (document.getElementById(hourId).value.length == 1)
		document.getElementById(hourId).value = '0' + document.getElementById(hourId).value;
}

/**
 * Substracts one hour to the hour input box. 24h format.
 * @param[in] hourId Id of the hour input box to be modified.
 * @returns Nothing.
 */
function hourMinusOne(hourId) {
	if (isNaN(document.getElementById(hourId).value))
		document.getElementById(hourId).value = '00';
	else if (document.getElementById(hourId).value == 0)
		document.getElementById(hourId).value = '23'; 
	else 
		document.getElementById(hourId).value--;
	if (document.getElementById(hourId).value.length == 1)
		document.getElementById(hourId).value = '0' + document.getElementById(hourId).value;
}

/**
 * Adds one minute to the minute input box.
 * @param[in] minuteId Id of the minute input box to be modified.
 * @returns Nothing.
 */
function minutePlusOne(minuteId) {
	if (isNaN(document.getElementById(minuteId).value))
		document.getElementById(minuteId).value = '00';
	else if (document.getElementById(minuteId).value == 59)
		document.getElementById(minuteId).value = '00'; 
	else 
		document.getElementById(minuteId).value++;
	if (document.getElementById(minuteId).value.length == 1)
		document.getElementById(minuteId).value = '0' + document.getElementById(minuteId).value;
}

/**
 * Substracts one minute to the hour input box.
 * @param[in] minuteId Id of the minute input box to be modified.
 * @returns Nothing.
 */
function minuteMinusOne(minuteId) {
	if (isNaN(document.getElementById(minuteId).value))
		document.getElementById(minuteId).value = '00';
	else if (document.getElementById(minuteId).value == 0)
		document.getElementById(minuteId).value = '59'; 
	else 
		document.getElementById(minuteId).value--;
	if (document.getElementById(minuteId).value.length == 1)
		document.getElementById(minuteId).value = '0' + document.getElementById(minuteId).value;
}

/**
 * Adds one to the snooze times, i.e. the number of times that the alarm will ring after the actual alarm time.
 * @param[in] snoozeTimes Id of the input box to be modified.
 * @returns Nothing.
 */
function addOneTime(snoozeTimes) {
	if (isNaN(document.getElementById(snoozeTimes).value))
		document.getElementById(snoozeTimes).value = '00';
	else if (document.getElementById(snoozeTimes).value == 5)
		document.getElementById(minuteId).value = '5';
	else 
		document.getElementById(minuteId).value++;
	if (document.getElementById(minuteId).value.length == 1)
		document.getElementById(minuteId).value = '0' + document.getElementById(minuteId).value;
}

// Main code
