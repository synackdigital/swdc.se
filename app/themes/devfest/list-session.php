<?php if (class_exists('SWDCSession')) : $sessions = SWDCSession::sessions_for_event( get_the_ID() ); ?>

    <?php if (count($sessions)) : ?>
    <ul class="sessions-list">
        <?php foreach ($sessions as $session) : ?>
            <li><a href="<?php echo get_permalink( $session->ID ); ?>"><?php echo get_the_title( $session->ID ); ?></a></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

<?php endif; ?>
