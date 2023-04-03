const isFullWidthLearningModeTemplate = document.querySelector( '.sensei-course-theme__header .sensei-course-theme-course-progress-bar' );

if ( isFullWidthLearningModeTemplate ) {
    document.querySelector( 'body' ).classList.add("learning-mode-full-width");
}