title: 'Digital Counters'
body:
  -
    type: text
    text: '<h2>Digital Counters</h2>'
  -
    type: image
    image:
      - /assets/VMPG/image34.png
    alignment: left
  -
    type: text
    text: '<p><strong>Java Class Name:</strong> &nbsp;VoltageDigitalCounter</p><p><strong>Notable APIs:</strong></p><p><code>void SetValue( double newValue );</code><br>This sets the number (truncated to an integer) displayed in the counter. If you set it to a number larger than the counter can hold, it’ll display all 9’s.</p><p><code>double GetValue();</code><br>&nbsp;This returns the current value of the counter.</p><p><code>void SetBarsForDigit( int digitIndex, EnumSet&lt;Flags&gt; flags );</code>&nbsp;<br>This lets you turn off and on individual segments of a digit so you can emulate things other than numbers. For instance, here’s the code that Voltage Modular’s MIDI Out module uses to make the MIDI channel selector say “All”:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image20.png
    alignment: left
  -
    type: text
    text: '<p><em>digitIndex<strong> </strong></em>starts from 0 at the rightmost digit and increases from right to left.<br></p><p>To use <code>SetBarsForDigit()</code>, you’ll need to either use the fully qualified name for <strong>EnumSet </strong>or import <strong>java.util.EnumSet</strong>:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image82.png
    alignment: left
  -
    type: image
    image:
      - /assets/VMPG/image79.png
    alignment: left
  -
    type: text
    text: '<p><code>void ClearBarsForDigit( int digit );</code><br>This clears the custom bar art you set via <code>SetBarsForDigit()</code> for a given digit.</p><p><strong>Save/Restore State:</strong> &nbsp;Voltage Modular doesn’t save state for digital counters.</p>'
  -
    type: image
    image:
      - /assets/VMPG/image42.png
    alignment: left
  -
    type: text
    text: '<p><br></p><p><br></p>'
template: documentation
id: 04abb3d4-fde3-4df4-bc76-05cf74ddc0bf
slug: digital-counters
blueprint: documentation
