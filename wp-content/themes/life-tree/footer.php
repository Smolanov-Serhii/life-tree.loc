<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package life-tree
 */

?>

	 <?php if ( is_front_page()): ?>
        <footer id="footer" class="footer home">
    <?php else : ?>
        <footer id="footer" class="footer">
    <?php endif; ?>
        <div class="footer__menu">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'Footer-menu',
                    'menu_id'        => 'footer-menu',
                )
            );
            ?>
        </div>
        <div class="footer__contacts">
            <a href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a>
            <a href="<?php echo get_theme_mod('phone_2'); ?>"><?php echo get_theme_mod('phone_2'); ?></a>
            <a href="mailto:<?php echo get_theme_mod('e-mail'); ?>"><?php echo get_theme_mod('e-mail'); ?></a>
        </div>
        <div class="footer__socials">
            <a href="<?php echo get_theme_mod('facebook'); ?>" class="footer__fb">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.9975 0H1.51854C0.679301 0 0 0.679301 0 1.51854V25.9975C0 26.8367 0.679301 27.516 1.51854 27.516H14.697V16.8604H11.1096V12.709H14.697V9.64264C14.697 6.08964 16.8673 4.15664 20.0385 4.15664C21.5571 4.15664 22.8624 4.2667 23.2424 4.31829V8.03296H21.0411C19.3214 8.03296 18.986 8.85844 18.986 10.0623V12.7107H23.0963L22.5631 16.8725H18.986V27.516H25.9975C26.8367 27.516 27.516 26.8367 27.516 25.9975V1.51854C27.516 0.679301 26.8367 0 25.9975 0Z" fill="white"/>
                </svg>
            </a>
            <a href="<?php echo get_theme_mod('instagram'); ?>" class="footer__insta">
                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4396 8.58887C11.147 8.58887 8.48767 11.241 8.48767 14.5246C8.48767 17.8082 11.147 20.4603 14.4396 20.4603C17.7321 20.4603 20.3915 17.8082 20.3915 14.5246C20.3915 11.241 17.7321 8.58887 14.4396 8.58887Z" fill="white"/>
                    <path d="M29 6.56736C29 2.90479 26.0873 0 22.4148 0H6.58515C2.91266 0 0 2.90479 0 6.56736V22.3543C0 26.0169 2.91266 28.9216 6.58515 28.9216H22.4148C26.0873 28.9216 29 26.0169 29 22.3543V6.56736ZM14.4367 23.6172C9.37118 23.6172 5.31878 19.5758 5.31878 14.524C5.31878 9.47216 9.37118 5.4307 14.4367 5.4307C19.5022 5.4307 23.5546 9.47216 23.5546 14.524C23.5546 19.5758 19.5022 23.6172 14.4367 23.6172ZM25.5808 6.69366C25.2009 7.07254 24.5677 7.32513 23.9345 7.32513C23.3013 7.32513 22.7948 7.07254 22.2882 6.69366C21.9083 6.31477 21.655 5.68329 21.655 5.05182C21.655 4.42034 21.9083 3.91516 22.2882 3.40998C22.6681 3.03109 23.3013 2.7785 23.9345 2.7785C24.5677 2.7785 25.0742 3.03109 25.5808 3.40998C25.9607 3.78886 26.214 4.42034 26.214 5.05182C26.214 5.68329 25.9607 6.31477 25.5808 6.69366Z" fill="white"/>
                </svg>
            </a>
            <a href="<?php echo get_theme_mod('youtube'); ?>" class="footer__youtube">
                <svg width="43" height="31" viewBox="0 0 43 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.6441 7.24031C41.6441 7.24031 41.2438 4.41267 40.0122 3.16563C38.4521 1.52858 36.7022 1.52345 35.8965 1.42594C30.154 1.01026 21.5273 1 21.5273 1C21.5273 1 10.8531 1.09237 7.56875 1.41055C6.65528 1.58246 4.60255 1.53114 3.04247 3.16563C1.81083 4.41524 1.41055 7.23775 1.41055 7.23775C1.41055 7.23775 1 10.5632 1 13.8835V17.1165C1 20.4394 1.41055 23.7623 1.41055 23.7623C1.41055 23.7623 1.81083 26.5848 3.04247 27.8344C4.60255 29.4689 6.65528 29.4175 7.56875 29.5895C10.8531 29.9051 21.5273 30 21.5273 30C21.5273 30 30.154 29.9897 35.8965 29.5741C36.7022 29.4766 38.4521 29.4714 40.0122 27.8344C41.2438 26.5873 41.6441 23.7597 41.6441 23.7597C41.6441 23.7597 42.0547 20.4394 42.0547 17.114V13.886C42.0547 10.5606 41.6441 7.24031 41.6441 7.24031Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.0158 3.16224C40.6325 3.78669 41.0408 4.8064 41.2948 5.66932C41.4219 6.10089 41.5104 6.49346 41.5672 6.77815C41.5956 6.92049 41.6161 7.03587 41.6295 7.11567C41.6361 7.15557 41.641 7.18657 41.6443 7.20761L41.6479 7.23155L41.6488 7.23766L41.649 7.2392L41.6492 7.24042L41.6494 7.24224L41.6503 7.24945L41.6537 7.27793L41.6667 7.38902C41.678 7.48632 41.694 7.62902 41.7132 7.81066C41.7517 8.17393 41.8031 8.69292 41.8544 9.31585C41.957 10.5617 42.0597 12.2233 42.0597 13.8862V17.1141C42.0597 18.777 41.957 20.4386 41.8544 21.6844C41.8031 22.3073 41.7517 22.8263 41.7132 23.1896C41.694 23.3712 41.678 23.5139 41.6667 23.6112L41.6537 23.7223L41.6503 23.7508L41.6494 23.758L41.6492 23.7598L41.649 23.761L41.6488 23.7626L41.6479 23.7687L41.6443 23.7926C41.641 23.8137 41.6361 23.8447 41.6295 23.8846C41.6161 23.9644 41.5956 24.0797 41.5672 24.2221C41.5104 24.5068 41.4219 24.8993 41.2948 25.3309C41.0408 26.1938 40.6325 27.2135 40.0158 27.838C38.6115 29.3115 37.0532 29.4641 36.1679 29.5507C36.0688 29.5605 35.9782 29.5693 35.8971 29.5791C33.0257 29.787 29.433 29.8935 26.5586 29.948C25.1213 29.9753 23.8635 29.9896 22.965 29.997C22.5158 30.0007 22.1564 30.0028 21.9092 30.0039L21.6256 30.0049L21.5277 30.0051L21.5273 30.0001L21.5274 29.9951L21.6256 29.9949L21.9092 29.9939C22.1563 29.9928 22.5157 29.9907 22.9649 29.987C23.8634 29.9796 25.1211 29.9653 26.5584 29.938C29.4328 29.8835 33.0249 29.777 35.896 29.5692C35.9772 29.5594 36.0679 29.5505 36.167 29.5408C37.0522 29.4541 38.607 29.3018 40.0086 27.831C40.6235 27.2085 41.0312 26.1908 41.2852 25.3281C41.4122 24.8969 41.5007 24.5046 41.5574 24.2201C41.5858 24.0779 41.6062 23.9626 41.6196 23.8829C41.6263 23.8431 41.6312 23.8121 41.6344 23.7911L41.638 23.7672L41.6389 23.7611L41.6391 23.7596L41.6392 23.7586L41.6403 23.7496L41.6438 23.7211L41.6568 23.6101C41.668 23.5128 41.6841 23.3701 41.7033 23.1885C41.7418 22.8253 41.7931 22.3064 41.8444 21.6836C41.947 20.4379 42.0497 18.7766 42.0497 17.1141V13.8862C42.0497 12.2236 41.947 10.5623 41.8444 9.31667C41.7931 8.69383 41.7418 8.17492 41.7033 7.81171C41.6841 7.63011 41.668 7.48744 41.6568 7.39017L41.6438 7.27912L41.6403 7.25066L41.6392 7.24165L41.6391 7.24062L41.6389 7.23909L41.638 7.23301L41.6344 7.20913C41.6312 7.18813 41.6263 7.15717 41.6196 7.11732C41.6062 7.03761 41.5858 6.92233 41.5574 6.7801C41.5007 6.49563 41.4122 6.10336 41.2852 5.67214C41.0312 4.80947 40.6235 3.79185 40.0086 3.16927C38.607 1.69848 37.0522 1.54614 36.167 1.45945C36.0679 1.44974 35.9772 1.44086 35.896 1.43104C33.0249 1.22321 29.4328 1.11673 26.5584 1.06221C25.1211 1.03495 23.8634 1.02067 22.9649 1.01322C22.5157 1.00949 22.1563 1.00746 21.9092 1.00637L21.6256 1.00533L21.5277 1.00512L21.5273 1.00012L21.5273 0.995117L21.6256 0.995334L21.9092 0.99637C22.1564 0.997463 22.5158 0.999488 22.965 1.00322C23.8635 1.01067 25.1213 1.02495 26.5586 1.05221C29.433 1.10674 33.0254 1.21322 35.8968 1.42107C35.9779 1.43089 36.0688 1.43979 36.1679 1.44949C37.0532 1.53615 38.6115 1.6887 40.0158 3.16224ZM21.5273 30.0001C21.5274 29.9951 21.5275 29.9951 21.5274 29.9951L21.5254 29.9951L21.0623 29.9904C20.764 29.9872 20.3342 29.9823 19.8082 29.9754C18.7562 29.9615 17.3193 29.9398 15.7798 29.9082C12.7008 29.845 9.2115 29.7424 7.56945 29.5846C7.41273 29.5551 7.2227 29.5322 7.00753 29.5063C5.96667 29.3807 4.33761 29.1842 3.04608 27.831C2.43118 27.2072 2.02342 26.1901 1.76943 25.3284C1.64247 24.8977 1.55398 24.506 1.49723 24.2219C1.46886 24.0799 1.44842 23.9648 1.43508 23.8853C1.42841 23.8455 1.42351 23.8146 1.42028 23.7936L1.41667 23.7698L1.41579 23.7637L1.41556 23.7622L1.41433 23.7521L1.4109 23.7236L1.39787 23.6125C1.38664 23.5152 1.37061 23.3724 1.35137 23.1907C1.31288 22.8273 1.26157 22.3082 1.21025 21.6852C1.10762 20.4392 1.005 18.7779 1.005 17.1166V13.8836C1.005 12.2236 1.10762 10.5623 1.21025 9.31602C1.26157 8.69287 1.31288 8.17347 1.35137 7.80987C1.37061 7.62806 1.38664 7.48521 1.39787 7.38781L1.4109 7.27661L1.41433 7.24811L1.41543 7.23908L1.41556 7.23806L1.41579 7.23653L1.41667 7.23046L1.42028 7.20662C1.42351 7.18566 1.42841 7.15476 1.43508 7.11497C1.44842 7.0354 1.46886 6.92031 1.49723 6.7783C1.55398 6.49427 1.64247 6.10256 1.76943 5.67182C2.02342 4.81012 2.43113 3.79313 3.04603 3.16926C4.33755 1.81613 5.96667 1.61955 7.00753 1.49398C7.2227 1.46803 7.41273 1.4451 7.56944 1.41562C9.21149 1.25657 12.7008 1.15394 15.7798 1.09107C17.3193 1.05964 18.7562 1.03815 19.8082 1.02452C20.3342 1.01771 20.764 1.01285 21.0623 1.00971L21.5277 1.00512C21.5278 1.00512 21.5274 1.00512 21.5273 1.00012C21.5273 0.995118 21.5274 0.995116 21.5273 0.995117L21.0622 0.999708C20.7639 1.00286 20.3341 1.00771 19.8081 1.01452C18.7561 1.02815 17.3191 1.04964 15.7796 1.08108C12.7005 1.14394 9.21068 1.24658 7.56826 1.40569C7.41216 1.43507 7.22214 1.45798 7.0073 1.48388C5.96667 1.60933 4.33318 1.80626 3.03888 3.16227C2.42215 3.78801 2.0139 4.80705 1.75984 5.66899C1.63278 6.10009 1.54422 6.4921 1.48743 6.77634C1.45903 6.91847 1.43857 7.03365 1.42522 7.11332C1.41854 7.15315 1.41363 7.1841 1.4104 7.2051L1.40678 7.229L1.40589 7.2351L1.40567 7.23664L1.4044 7.2469L1.40097 7.27543L1.38793 7.38667C1.37671 7.48409 1.36067 7.62698 1.34142 7.80882C1.30293 8.17249 1.25161 8.69196 1.20029 9.3152C1.09764 10.5617 0.994995 12.2233 0.994995 13.8836V17.1166C0.994995 18.7783 1.09764 20.4398 1.20029 21.686C1.25161 22.3091 1.30293 22.8283 1.34142 23.1918C1.36067 23.3735 1.37671 23.5163 1.38793 23.6137L1.40097 23.7248L1.4044 23.7533L1.4055 23.7624L1.40567 23.7636L1.40589 23.7651L1.40678 23.7712L1.4104 23.7951C1.41363 23.8161 1.41854 23.8471 1.42522 23.8869C1.43857 23.9666 1.45903 24.0818 1.48743 24.2239C1.54422 24.5081 1.63278 24.9002 1.75984 25.3312C2.0139 26.1932 2.42215 27.2122 3.03887 27.838C4.33317 29.194 5.96667 29.3909 7.0073 29.5164C7.22215 29.5423 7.41172 29.5651 7.56782 29.5945C9.21023 29.7523 12.7005 29.855 15.7796 29.9182C17.3191 29.9498 18.7561 29.9715 19.8081 29.9854C20.3341 29.9923 20.7639 29.9972 21.0622 30.0004L21.5277 30.0051C21.5278 30.0051 21.5273 30.0051 21.5273 30.0001Z" fill="white"/>
                    <path d="M17.2874 20.8795H17.2951L28.3798 15.1318L17.2874 9.3457V20.8795Z" fill="#8FBF4F"/>
                </svg>
            </a>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
