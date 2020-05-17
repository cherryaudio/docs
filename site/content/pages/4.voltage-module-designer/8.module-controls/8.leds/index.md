title: LEDs
body:
  -
    type: text
    text: '<h2>LEDs</h2>'
  -
    type: image
    image:
      - /assets/VMPG/image41.png
    alignment: left
  -
    type: text
    text: '<p><strong>Java Class Name:</strong> &nbsp;VoltageLED</p><p><strong>Notable APIs:</strong></p><p><code>void SetValue( double value );</code><br>This sets the LED “brightness” (actually a state image), with a valid range from 0 to 1. If it’s a simple on/off LED skin, it’ll be in the ‘off’ state if the value is less than 0.4 and in the ‘on’ state otherwise. If the LED skin has more than two states, the state to display will be the number of states multiplied by the LED value and then rounded off to an integer, which will be used as a zero-based index into the array of state images. Here’s a screenshot of a module showing the “Red” LED skin, which only has on and off states, and the “Blue and Red” skin, which has off, red, and blue states, with each skin at various values from 0 to 1:</p><p><code><code><code>double GetValue();</code></code></code><code><br></code>This returns the LED’s current value.</p><p><code>void SetMomentaryBlink( int milsToBlink );</code><br>This turns the LED on for milsToBlink milliseconds, then turns it off again.</p><p><code>void SetBlinkEvery( int blinkIntervalMils, int blinkOnMils );</code><br>This makes the LED blink. The blink cycle will be blinkIntervalMils &nbsp;milliseconds long, and the LED will be lit for blinkOnMils milliseconds of the cycle. The button-lit intensity will be whatever the value was in your last call to <code>SetValue()</code>, so call <code>SetValue()</code> just before calling <code>SetBlinkEvery()</code> to make sure it lights up during the blink-on part of the cycle.</p><p><code>void StopBlinking();</code><br>Stops the LED from blinking.</p><p><strong>Save/Restore State:</strong> &nbsp;Voltage Modular doesn’t save state for LEDs. </p>'
  -
    type: image
    image:
      - /assets/VMPG/image52.png
    alignment: left
  -
    type: text
    text: '<p><br></p><p><br></p>'
template: documentation
fieldset: documentation
id: c995ff91-ece2-41b7-879c-db7e2b74976e
