<h3>Upcoming Appointments</h3>
    <ul>
        <?php foreach ($_SESSION['appointments'] as $appt): ?>
            <li>
                <?= htmlspecialchars($appt['patient']) ?> with <?= htmlspecialchars($appt['doctor']) ?> on <?= htmlspecialchars($appt['date']) ?> at <?= htmlspecialchars($appt['time']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
