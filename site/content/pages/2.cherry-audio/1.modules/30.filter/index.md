title: Filter
body:
  -
    type: text
    text: '<h1>FILTER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_filter.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Filter module is a full-featured classic analog synthesis filter featuring lowpass, bandpass, and highpass outputs, 12- and 24-db per octave slopes, and two modulation inputs.<br></p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_filter_lp.jpg
    alignment: left
  -
    type: text
    text: '<p>If you''re not familiar with how filters work, a lowpass filter allows frequencies <em>below</em>&nbsp;the cutoff frequency setting to pass through, but blocks frequencies <em>above</em>&nbsp;the cutoff frequency. The frequency plot above shows the effect of a lowpass filter with its cutoff set at 412 Hz on a sawtooth wave. (The vertical axis represents amplitude and the horizontal axis represents frequency. "Axis: Bold As Love" represents a sweet Jimi Hendrix record from ''67.) You can see how the high-frequency content trails off as it gets higher.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_filter_hp.jpg
    alignment: left
  -
    type: text
    text: '<p>This plot shows the same oscillator signal and cutoff frequency setting using the highpass mode. This is the opposite of lowpass mode: high-frequency content remains, but low frequencies are removed as the cutoff frequency increases.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_filter_bp.jpg
    alignment: left
  -
    type: text
    text: '<p>The plot above shows the same oscillator signal and cutoff frequency setting using the bandpass mode. Bandpass mode combines <em>both</em>&nbsp;lowpass and highpass modes, leaving sound only "in the middle." The cutoff frequency lies roughly halfway between the falloff on each side. By the way, this is pretty much how the tone controls on your stereo work!</p><p>Now that you know how filters work, let''s look into Voltage Modular''s "standard" filter:</p><h2>Inputs, Outputs, and Controls</h2><p><strong>Audio In jack</strong>- Patch audio signals in here.</p><p><strong>1V/Oct</strong>- This is a cutoff frequency modulation input intended to be used with keyboard CV inputs. It allows the cutoff frequency to follow or "track" notes played so that the relative brightness of notes follows note pitch.</p><p><strong>Mod Type, Mod Amount, and CV input 1 and 2</strong>- CV mod inputs affecting cutoff frequency. Each includes an attenuator knob.</p><p>The <em>Mod Type</em>&nbsp;button lets you select linear or exponential modulation. We''ll give a couple of examples to clarify how they work:</p><ul><li><strong>Exponential</strong>- For a given mod input voltage, the mod amount increases as frequency increases. For example, if the base cutoff frequency is 1000 Hz, and a bipolar wave is applied to the mod CV input, the cutoff frequency rises to 2000 Hz, and falls to 500 Hz. Because audio frequencies are inherently exponential in nature, the resulting cutoff frequency rises and falls exactly one octave. <br>(This is why expo mod is generally used for oscillator mod - so that vibrato will rise and fall an equal amount above and below the pitch center.)&nbsp;</li><li><strong>Linear</strong>- For a given mod input voltage, the mod amount stays the same as frequency increases (hence the "linear" name). For example, if the base cutoff frequency is 1000 Hz, and a bipolar wave is applied to the mod CV input, the cutoff frequency rises to 1500 Hz, and fall to 500Hz. In other words, the frequency rises and falls by the same number of Hz in either direction. <br><br>If the intent of the modulation is a tremolo or filter "wah wah" effect, linear mod is likely the wrong choice, because the audible effect will appear to be greater in one direction than the other - in this case, expo mod would be the best choice.&nbsp;<br><br>So when would we use linear mod? The advantage of linear mod is that it stays constant regardless of the base frequency, which makes it useful for audio-range modulation (i.e. mod frequencies 20 Hz and faster) when the mod source is to alter tone color. (As opposed to adding vibrato/wah-wah/tremelo, etc.) In use, you''ll find that expo mod allows notes and scales to play in tune, whereas expo mod in the audio range allow neat ring mod-style sound effects, but doesn''t usually allow properly pitched half-step scales.</li></ul><p><strong>Cutoff</strong>- Sets the frequency where attenuation begins. Attenuation will be above or below this frequency (or both) depending on which output is currently used. Also something I frequently hear at the bar, as in "you''re cut off, pal!"</p><p><strong>Resonance</strong>- Emphasizes sound energy at and around the current cutoff frequency by adding feedback from the filter''s output back to its input. At lower settings, this can be used to create mild resonances such as those heard in acoustic instruments. At more extreme settings, resonance can create a pure sine wave at its own frequency (variable via the <em>Cutoff</em> knob). Be careful with this knob as it can get loud at extreme settings.</p><p><strong>Slope</strong>- The nature of how a filter works is such that its affect on frequencies "falls off" above or below the cutoff frequency. Slope adjusts the "steepness" of this slope. A 12db per/octave filter has a shallower slope, giving it a clearer and brighter character, whereas a 24db per/octave filter''s steeper slope gives it a tighter and darker tone (as well as more pronounced character with the resonance knob turned up).</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_filter_outjacks.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Lowpass, Bandpass, and Highpass Output Jacks</strong>- These are output jacks for lowpass, bandpass, and highpass modes, respectively. The icons visually represent the effect each has on incoming signals if the signal were to be viewed in a spectrum analyzer (check out the fancy diagrams in the intro). These can be used simultaneously, in any combination. Combining the outputs with a mixer can result in interesting curves.</p>'
template: documentation
seo:
  description: 'The Filter module is a classic analog synthesis filter with lowpass, bandpass, and highpass outputs, 12- and 24-db per octave slopes, and two modulation inputs.'
  image: /assets/social-modules/filter.png
fieldset: documentation
id: 95b61c32-b07c-4c63-8046-2b5f160fb7f4
