title: Knobs
body:
  -
    type: text
    text: '<h2>Knobs</h2>'
  -
    type: image
    image:
      - /assets/VMPG/image31.png
    alignment: left
  -
    type: text
    text: '<p><strong>Java Class Name:</strong> &nbsp;VoltageKnob</p><p><strong>Notable APIs:</strong></p><p><code>void SetValue( double newValue );&nbsp;&nbsp;<br></code>This will set the knob’s value. newValue should be within the knob’s min and max ranges<sup>.</sup></p><p><code>double GetValue();</code>&nbsp;<br>Retrieves the knob’s current value.</p><p><strong>Notifications:</strong></p><p>A <code>Knob_Changed </code>notification will arrive in <code>Notify()</code> whenever a knob’s value changes:</p><p><strong>Save/Restore State:</strong> &nbsp;Voltage Modular automatically saves and restores knob states when users save and load presets. When a preset loads, you’ll get a <code>Knob_Changed</code> notification at startup (just after your <code>Initialize()</code> function has run) for each knob on your module.</p>'
  -
    type: image
    image:
      - /assets/VMPG/image33.png
    alignment: left
  -
    type: text
    text: "<p><strong>Display Values in Percent</strong>: If checked, tooltips that display the knob’s value will multiply the knob’s actual value by 100 and display it as a percentage (i.e., if the knob value is 0.5, the tooltip will say “50%”). If unchecked, tooltips will display the knob’s actual value.</p><p><strong>Tooltip Units: </strong>If you enter text here, it’ll get appended (with an intervening space) to the knob’s tooltip. If you set it to “volts”, for instance, and the knob’s value is 4.2, its tooltip will be “4.2 volts”.</p><p><strong>Has Outer Dial:</strong> if checked, the knob will have a dial ring around it that changes color to reflect the knob’s current value.</p><p><strong>Dial Skin:</strong> the skin for said dial.</p><p><strong>Ring Levels Start From Center:</strong> If unchecked, dial ring colors will progress from min to max. If checked, they’ll progress from center out.</p><p><strong>Min, Max, and Default Values:</strong> the valid range of values for the knob and the default value for a brand new knob. Max must be greater than Min and Default should be somewhere in the range from Min to Max.</p><p><strong>Num Discrete Steps:</strong> Set this to a value of two or larger if you want your knob to have a finite number of fixed settings instead of scrolling continuously. If your knob is a waveform selector with sine, saw, and triangle settings, for instance, set <em>Num Discrete Steps</em> to 3, and the knob will effectively act as a three-state switch and only allow you to switch between three possible values. If Min Value is set to 0 and Max Value to 2 in this case, the knob’s value will always be 0, 1, or 2.</p><p><strong>Start and End Angles: </strong>These specify the angles to which the knob will be rotated when set to its min and max values, respectively. Angles progress clockwise in degrees starting from zero at 12 o’clock (straight up).</p><p><br></p><p>\f<br></p><p><br></p>"
template: documentation
fieldset: documentation
id: 16b6d843-903f-4150-bbc6-ad7ef2984a98
