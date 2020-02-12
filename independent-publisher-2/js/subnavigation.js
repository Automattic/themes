/**
 * File subnavigation.js.
 *
 * Correct drop-down menu offsets to ensure that the submenu is completely visible.
 */

/**
* Check if an element is out of the viewport
* (c) 2018 Chris Ferdinandi, MIT License, https://gomakethings.com
* @see https://vanillajstoolkit.com/helpers/isoutofviewport/
* @param  {Node}    element The element to check
* @return {Boolean}         Whether the element overflows to the right-hand side
*/
const isOutOfViewport = function (element) {
    const bounding = element.getBoundingClientRect();
    const out = bounding.right > (window.innerWidth || document.documentElement.clientWidth);
    return out;
};

/**
 * Polyfill for getBoundingClientRect
 * @see https://gist.github.com/afterburn/a752b59172751c6900990f659cfb4481
 */
Element.prototype._getBoundingClientRect = Element.prototype.getBoundingClientRect
Element.prototype.getBoundingClientRect = function () {
    const rect = Element.prototype._getBoundingClientRect.call(this)
    rect.x = rect.left
    rect.y = rect.top
    return rect
}

/**
 * Correct drop-down offset
 * @param  {Node} element The element to check
 * @return void
 */
const correctDropDownOffset = function (event) {
    if (event.target.matches('a')) {
        const submenu = event.target.parentNode.childNodes[2];
        submenu.classList.remove('fix-right');
        const offset = isOutOfViewport(submenu);
        if (offset) {
            submenu.classList.add('fix-right');
        }
    }
};

/**
 * Handle mouseover event
 */
const menu = document.querySelector('#primary-menu');
menu.addEventListener('mouseover', correctDropDownOffset, false);
