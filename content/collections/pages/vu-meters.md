title: 'VU Meters'
body:
  -
    type: text
    text: '<h2>VU Meters</h2>'
  -
    type: image
    image:
      - /assets/VMPG/image87.png
    alignment: left
  -
    type: text
    text: '<p>VU Meters have a valid range from 0 to 1, but you can set the value to be interpreted in either linear or logarithmic fashion.</p><p><strong>Java Class Name:</strong> &nbsp;VoltageVUMeter</p><p><strong>Notable APIs:</strong></p><p><code>void SetLinearMode( boolean linMode );</code><br>Set this to true for the meter to operate in linear mode, false for it to behave logarithmically.</p><p><code>void SetValue( double newValue );</code><br>Sets the meter’s value, valid range is from 0 to 1.</p><p><code>double GetValue();</code><br>Retrieves the meter’s current value.</p><p><strong>Save/Restore State:</strong> &nbsp;Voltage Modular doesn’t save state for VU meters. </p>'
  -
    type: image
    image:
      - /assets/VMPG/image59.png
    alignment: left
  -
    type: text
    text: '<p><br></p><p><br></p>'
template: documentation
id: d52e4f77-6d64-49f3-967a-221fc717a820
slug: vu-meters
blueprint: documentation
