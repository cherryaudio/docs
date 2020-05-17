title: Amplifier
body:
  -
    type: text
    text: '<h1>AMPLIFIER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_amplifier.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Amplifier module is a voltage-controlled amplifier, usable with audio or control signals. It''s operation is relatively simple, but it remains one of the most important modules in the synthesis "tool box."<br></p><p>The idea of a voltage-controlled amplifier (VCA) is that an audio or control signal is patched to its input, then its amplitude can be externally controlled via the <em>CV In</em>&nbsp;jack. This is useful for turning audio or control signals on or off, applying envelope volume curves to sounds, regulating the amount of modulation signals applied to audio signals, and more. Think of it as a voltage-controlled gate, with a variable amount of gate opening.</p><h2>Inputs, Outputs, and Controls</h2><p><strong>CV In jack</strong>- Control signal inputs such as gates, envelope generators, and mod sources (such as low-frequency oscillators) are patched in here. The most common control signal would be an envelope generator (for shaping the amplitude curve of notes), but any control signal can be patched here, including gates, LFO''s, sequencers, noise generators, sample and holds, etc.\ The voltage level applied corresponds to the input signal''s amplitude, with 0V = no signal passed and 5V = full amplitude passed.</p><p><strong>CV Amount</strong>- Sets the amplitude of the control signal received at the <em>CV In</em>&nbsp;jack.</p><p><strong>Input jack</strong>- Use this jack to patch in audio or control signals to be affected by the <em>CV In</em> jack.</p><p><strong>Gain</strong>- Adds up to 5 volts of gain. This works <em>in addition</em>&nbsp;to incoming <em>CV In</em>&nbsp;jack voltages. It''s also useful for manually "opening" the amplifier.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_amplifier_linexp.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Response - Lin/Expo</strong>- These select the "curve" of the amplifier''s response as the input CV rises from 0 to 5V. <em>Lin</em>&nbsp;or linear response curve is equally proportional across the voltage input range, where as an <em>Expo</em>&nbsp;or exponential curve is closer to how the human ear perceives volume. With that in mind, you''ll likely want to use the <em>Lin</em>&nbsp;setting for modulation or control voltage situations, and use the <em>Expo</em>&nbsp;setting when an envelope generator is used to control an audio signal with the amplifier. Or just use whatever sounds best, we won''t tell.</p><p><strong>Output jacks</strong>- The <em>Output</em>&nbsp;jack carries the CV-modified version of the input signal. The <em>Inv Out</em>&nbsp;jack is an inverted version of the output signal. Be careful not to use both at the same level, because they can cancel the output entirely.</p>'
template: documentation
seo:
  description: 'The Amplifier is a VCA, usable with audio or control signals. It''s relatively simple, but is one of the most important modules in the synthesis "tool box."'
  image: /assets/social-modules/amplifier.png
id: b98eda3e-8953-4c7b-acc2-6980cc7bd3fc
slug: amplifier
blueprint: documentation
