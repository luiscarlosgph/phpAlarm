<?php

/**
 * phpAlarm v0.1
 *
 * @class Alarm 
 * @brief Represents an alarm with the following attributes:
 * HH:MM                        -> hour and minutes of the alarm.
 * Sun, Mon, Tue, Wed, Thu, Sat -> Booleans, is alarm activated on each day? 
 * SnoozeTimes                  -> Number of times of snooze
 * SnoozeIntrval                -> Interval in minutes between one snooze and the next one 
 * Tone                         -> Path to the audio file to be played.
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

class Alarm {
	// Constants

	// Public
	
	// Protected
	protected $m_time = '00:00';	
	
	/* 
	 * Each element of the array represents the activation of the alarm in a day of the week, starting 
	 * with Sunday
	 */
	protected $m_daysOfWeek = array(0, 0, 0, 0, 0, 0, 0);	
	
	protected $m_snoozeTimes = 3;
	protected $m_snoozeInterval = 5;
	protected $m_tone = ''; 
}

?>
