title: Glide
body:
  -
    type: text
    text: '<h1>GLIDE</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_glide.jpg
    alignment: left
  -
    type: text
    text: '<p>The Glide module is used to slide smoothly from one input control voltage to another. This is typically used to slide between pitch CVs creating portamento as one note glides to the next. The module features an adjustable speed, linear or constant curve, and a CV jack for enabling and disabling the glide in real time.</p><h2><strong>Inputs, Outputs and Controls</strong></h2><p><strong>Input jack</strong>- Input jack for the control voltages you wish to glide between. Typically this will receive pitch CVs from a keyboard or sequencer.&nbsp;&nbsp;</p><p><strong>Amount</strong>- Adjusts the speed of the glide from 0ms to 5000ms (5 seconds). When the curve is set to&nbsp;<em>Con</em>, this is the amount of time it will take to slide from one CV to the next. When the curve is set to <em>Lin</em>, the slide time will be different depending on the distance between CVs so this is actually adjusting the speed of the glide rather than the time it will take to complete each transition.</p><p><strong>Curve</strong>- Selects between two options for transitioning from one CV to the next. When <em>Lin</em> (linear) is selected, the rate of the glide will remain the same regardless of how far apart the CVs are. Therefore gliding between voltages near one another will take less time than voltages that are farther apart. When <em>Con</em> (constant) is selected, the amount of time it takes to glide between voltages will be the same regardless of how far apart the voltages are.<br></p><p><strong>External Engage jack</strong>- Allows the glide module to be enabled and disabled in real time using control voltages. Voltages 2.5V or higher will enable the glide while voltages less than 2.5V will disable it.<br></p><p><strong>Output jack</strong>- Outputs a CV signal that slides from one voltage to the next. Typically this will be connected to the Keyb CV input of an oscillator to create portamento.<br></p>'
template: documentation
seo:
  description: 'Classic glide or "portamento" for sliding between notes with adjustable speed, linear or constant curve, and a CV jack for real-time enable/disable.'
  image: /assets/social-modules/glide.png
id: 8ab8f125-efd6-49f9-9055-a0859b1a0800
slug: glide
blueprint: documentation
