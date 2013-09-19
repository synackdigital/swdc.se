<?php if (class_exists('SWDCSession')) : $sessions = SWDCSession::sessions_for_event( get_the_ID() ); ?>

    <?php if (count($sessions)) : ?>
    <ul class="sessions-list">
      <h2>Planned sessions:</h2>
      <?php foreach ($sessions as $session) : ?>
      <li>
        <span class="session-title"><?php echo get_the_title( $session->ID ); ?></span>
        <span class="speaker-name">Speaker Name</span>
        <span class="speaker-company">Company</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>

<?php endif; ?>
