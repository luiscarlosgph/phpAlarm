<?php

/**
 * phpAlarm v0.1
 *
 * @class AlarmDb 
 * @brief Represents a database which stores alarms. 
 * This class uses SQLite and a table called Alarm.
 * 
 * The format for an alarm in the database follows:
 * The column Time is a text string like this 'HH:MM'.
 * The columns Sunday, Monday, Tuesday and so on are integers wi
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

include 'alarm.php';

class AlarmDb {
	// Constants
	const TABLE_NAME = 'Alarm';	

	// Public
	
	/**
	 * Checks that the file specified does not currently exist and creates the database with the table 
	 * alarm inside.
	 * @param[in] filepath Path to the DB file that will be created.
	 * This method dies in case of error.
	 */
	public function createDb($filepath) {
		$m_dbHandle = sqlite_open($filepath, 0666, $error);
		if (!$m_dbHandle) 
			die ($error);

		$sql = 'CREATE TABLE '. constant('TABLE_NAME') . '(' .
				 'Id integer PRIMARY, ' .
				 'Time text NOT NULL, ' .
				 'Sunday integer CHECK(Sunday IN (0, 1)) NOT NULL, ' .
				 'Monday integer CHECK(Monday IN (0, 1)) NOT NULL, ' .
				 'Tuesday integer CHECK(Tuesday IN (0, 1)) NOT NULL, ' .
				 'Wednesday integer CHECK(Wednesday IN (0, 1)) NOT NULL, ' .
				 'Thursday integer CHECK(Thursday in (0, 1)) NOT NULL, ' .
				 'Friday integer CHECK(Friday in (0, 1)) NOT NULL, ' .
				 'Saturday integer CHECK(Saturday in (0, 1)) NOT NULL, ' .
				 'SnoozeTimes integer NOT NULL, ' .
				 'SnoozeIntervalMin integer NOT NULL, ' .
				 'ToneFilePath text NOT NULL)';
		$ok = sqlite_exec($m_dbHandle, $sql, $error);

		if (!$ok)
   		die("Cannot execute query. $error");

		sqlite_close($m_dbHandle);
	}

	/**
	 * Opens the specified database. It dies in case of error.
	 * @param[in] filename Path to the file which stores the database. 
	 */
	public function openDb($filename) {
		if (!file_exists($filename))
   		die('DB file does not exist.');
		$m_dbHandle = sqlite_open($filepath, 0666, $error);
		if (!$m_dbHandle) 
			die ($error);
	}

	/**
	 * Closes the database if it was opened before. 
	 */
	public function closeDb() {
		if($m_dbHandle != -1) {
			sqlite_close($m_dbHandle);
			$m_dbHandle = -1;
		}
	}

	/**
	 * Adds an alarm to the database.
    * @param[in] time           String with the time of the alarm, e.g. 22:04 (the format is HH:MM, colon included.)
	 * @param[in] daysOfWeek     Array of boolean. Each item represents if the alarm is activated for that day of the week.
	 * @param[in] snoozeTimes    Number of times that the alarm is repeated after the actual time.
	 * @param[in] snoozeInterval Number of minutes between each of the snoozes.
	 * @param[in] tone           Path to the audio file that will be played to wake you up.
	 */
	public function addAlarm($alarm) {
		$time = $alarm.getTime();
		$daysOfWeek = $alarm.getDaysOfWeek();
		$snoozeTimes = $alarm.getSnoozeTimes();
		$snoozeInteval = $alarm.getSnoozeInterval();
		$tone = $alarm.getAlarmTone();
		
		$sun = $daysOfWeek[0];	
		$mon = $daysOfWeek[1];	
		$tue = $daysOfWeek[2];	
		$wed = $daysOfWeek[3];	
		$thu = $daysOfWeek[4];	
		$fri = $daysOfWeek[5];	
		$sat = $daysOfWeek[6];
		
		$sql = "INSERT INTO Alarm(Time, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, " . 
				 "SnoozeTimes, SnoozeIntervalMin, ToneFilePath) VALUES('$time', $sun, $mon, $tue, $wed, $thu, $fri, $sat, " .
				 "$snoozeTimes, $snoozeInterval, $tone)";
		
		$ok = sqlite_exec($m_dbHandle, $sql, $error);
		if (!$ok)
   		die("Cannot execute query. $error");
	}
	
	/**
	 * Deletes an alarm from the database.
    * @param[in] id Id of the alarm to be deleted.
	 */
	public function deleteAlarm($id) {
		$sql = 'DELETE FROM ' . constant('TABLE_NAME') . "WHERE Id = $id";
		$ok = sqlite_exec($m_dbHandle, $sql, $error);
		if (!$ok)
   		die("Cannot execute query. $error");
	}
	
	/**
	 * @returns an array with all the alarms found in the database.
	 */
	public function getAlarms() {
		$alarms = array();
		$sql = 'SELECT * FROM ' . constant('TABLE_NAME');
		
		$query = sqlite_query($m_dbHandle, $sql, $error);
		if ($error)
			die("Cannot execute query. $error"); // This means that most probably we catch a syntax error
		if (!$query)
    		die('Impossible to execute query.'); // This means that the db owner is different from the web 
                                              // server's one, but we did not commit any syntax mistake.
		while ($row = $query->fetch()) {
			var_dump($row);
		}
	}

	// Protected
	protected $m_dbHandle = -1;
}

?>
