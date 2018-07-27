<?php


class BookingModel
{
	public function create(
		$user_id,
		$booking_date,
        $booking_time,
		$seat_number)
	{
		$sql = "INSERT INTO booking
        (
			user_id,
			booking_date,
			booking_time,
			created_at,
			seat_number
		) VALUES (?, ?, ?, NOW(), ?)";

        // Insertion de la réservation dans la base de données.
        $db = new Database();
		$db->executeSql($sql,
		[
            $user_id,
            $booking_date,
            $booking_time,
            $seat_number
		]);

        // Ajout d'un message de notification.
        $flashBag = new FlashBag();
        $flashBag->add('Votre réservation est bien enregistrée, nous vous en remercions.');
	}
}