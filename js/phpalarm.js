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
 * Adds one to the value of the input box passed as a parameter.
 * @param[in] numInputBox Id of the input box to be modified. 
 * @param[in] maxVal   Maximum value of the input box number.
 * @returns Nothing.
 */
function addOne(numInputBox, maxVal) {
	if (isNaN(document.getElementById(numInputBox).value))
		document.getElementById(numInputBox).value = '0';
	else if (document.getElementById(numInputBox).value == maxVal)
		document.getElementById(numInputBox).value = 0; 
	else 
		document.getElementById(numInputBox).value++;
	if (document.getElementById(numInputBox).value.length == 1)
		document.getElementById(numInputBox).value = '0' + document.getElementById(numInputBox).value;
}

/**
 * Substracts one to the value of the input box passed as a parameter.
 * @param[in] numInputBox Id of the input box to be modified. 
 * @param[in] maxVal   Maximum value of the input box number.
 * @returns Nothing.
 */
function subOne(numInputBox, maxVal) {
	if (isNaN(document.getElementById(numInputBox).value))
		document.getElementById(numInputBox).value = '0';
	else if (document.getElementById(numInputBox).value == 0)
		document.getElementById(numInputBox).value = maxVal; 
	else 
		document.getElementById(numInputBox).value--;
	if (document.getElementById(numInputBox).value.length == 1)
		document.getElementById(numInputBox).value = '0' + document.getElementById(numInputBox).value;
}

/**
 * If the object passed as a parameter has the class 'active', the class attributed is cleared.
 * If the object has not got any class, the class 'active' is set.
 * This is used to activate and deactivate the days of the week.
 * @param[in] controlId Id of the <li> tag that will be activated or deactivated.
 * @returns Nothing.
 */
function activateLink(controlId) {
	if (document.getElementById(controlId).getAttribute('class'))
		document.getElementById(controlId).setAttribute('class', '');
	else
		document.getElementById(controlId).setAttribute('class', 'active');
}

// Main code
