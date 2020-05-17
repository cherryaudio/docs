title: 'Text Labels'
body:
  -
    type: text
    text: '<h2>Text Labels</h2><p><strong>Java Class Name: </strong>&nbsp;VoltageLabel</p><p><strong>Notable APIs:</strong></p><p><code>void SetText( String newText );</code><br>Sets the text for the label.</p><p><code>String GetText();</code><br>Returns the label’s text.</p><p><code>void SetColor( Color color );</code><br>Sets the text color. color is a Java Color object and can include an alpha value.</p><p><code>void SetBkColor( Color color );</code><br>Sets the background color for the label control (by default, it has an alpha value of zero).</p><p><code>void SetBorderColor( Color color );</code><br>Sets the color of the control’s border (alpha = zero by default).</p><p><code>void SetBorderSize( int pixSize );</code><br>Sets the width of the border, in pxiels.</p><p><code>void SetFont( String typeface, int fontSize, boolean bBold, boolean bItalic );</code><br>Sets various properties of the control’s font. fontSize is height in pixels.</p><p><code>void SetJustificationFlags( Justification justificationFlag );</code><br>Sets the text’s horizontal and vertical justification.</p><p><code>void SetMultiLineEdit( boolean bMultiLineEdit );</code><br>Set to true to make this a multi-line text control.</p><p><code>void SetHorizontalScale( double scale );</code><br>Allows you to change the widths of the characters in the text control. 1.0 = normal, 2.0 = double width, 0.5 = half width, etc.</p><p><strong>Save/Restore State:</strong> &nbsp;Voltage Modular doesn’t save or restore state information for text labels with presets.</p>'
  -
    type: image
    image:
      - /assets/VMPG/image21.png
    alignment: left
  -
    type: text
    text: "<p><strong>Text: </strong>The text that will be displayed in the label.</p><p><strong>Font, Font Height, Bold, and Italic: </strong>These set basic font properties for the text. The Font dropdown will only show typefaces that are preinstalled on both Windows and Mac computers..</p><p><strong>Horizontal and Vertical Orientation:</strong> How the text will be aligned within its bounding rectangle.</p><p><strong>Multi Line:</strong> if checked, the text can be more than one line tall.</p><p><strong>Text Color:</strong> the text color and opacity.</p><p><strong>Background Color:</strong> color and opacity for the background of the text label’s bounding rectangle.</p><p><strong>Border Color:</strong> color and opacity of a border drawn around the text label’s bounding rectangle.</p><p><strong>Border Width:</strong> width, in pixels, of the text label’s border. Only applicable if the <em>border color</em> property specifies a non-zero opacity.</p><p><br></p><p>\f<br></p><p><br></p>"
template: documentation
fieldset: documentation
id: 3dc5b27a-7b54-4c59-8acb-0071a8dbb528
