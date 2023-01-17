<?php
    session_start();

    if(!isset($_SESSION['id_estagiario'])) {
        header("Location: http://localhost/Project_TecSystemHelper/");
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/envioEmailTRE.css">
    <title>Envio de Email - TRE</title>
</head>
<body>
    <header>
        <div class='header'><a class="aheader" href="../index.php">Pablinsk's Email</a></div>
        <div class='header'><a class="aheader" href="./sair.php">Logout</a></div>
    </header>
    <form method="post" action="./tiposEmail/emailTRE.php">
        <h1>TRE Mailer</h1>
        <?php

?>
        <p>Chamado</p>
        <input type="text" id="chamado" name="chamado">    
        <p>Zona</p>
        <select name="zona" id="zona">
            <option value="1" name="1">1</option>
            <option value="2" name="2">2</option>
            <option value="3" name="3">3</option>
            <option value="4" name="4">4</option>
            <option value="5" name="5">5</option>
            <option value="6" name="6">6</option>
            <option value="7" name="7">7</option>
            <option value="8" name="8">8</option>
            <option value="9" name="9">9</option>
            <option value="10" name="10">10</option>
            <option value="11" name="11">11</option>
            <option value="12" name="12">12</option>
            <option value="13" name="13">13</option>
            <option value="14" name="14">14</option>
            <option value="15" name="15">15</option>
            <option value="16" name="16">16</option>
            <option value="17" name="17">17</option>
            <option value="18" name="18">18</option>
            <option value="19" name="19">19</option>
            <option value="20" name="20">20</option>
            <option value="21" name="21">21</option>
            <option value="22" name="22">22</option>
            <option value="23" name="23">23</option>
            <option value="24" name="24">24</option>
            <option value="25" name="25">25</option>
            <option value="26" name="26">26</option>
            <option value="27" name="27">27</option>
            <option value="28" name="28">28</option>
            <option value="29" name="29">29</option>
            <option value="30" name="30">30</option>
            <option value="31" name="31">31</option>
            <option value="32" name="32">32</option>
            <option value="33" name="33">33</option>
            <option value="34" name="34">34</option>
            <option value="35" name="35">35</option>
            <option value="36" name="36">36</option>
            <option value="37" name="37">37</option>
            <option value="38" name="38">38</option>
            <option value="39" name="39">39</option>
            <option value="40" name="40">40</option>
            <option value="41" name="41">41</option>
            <option value="42" name="42">42</option>
            <option value="43" name="43">43</option>
            <option value="44" name="44">44</option>
            <option value="45" name="45">45</option>
            <option value="46" name="46">46</option>
            <option value="47" name="47">47</option>
            <option value="48" name="48">48</option>
            <option value="49" name="49">49</option>
            <option value="50" name="50">50</option>
            <option value="51" name="51">51</option>
            <option value="52" name="52">52</option>
            <option value="53" name="53">53</option>
            <option value="54" name="54">54</option>
            <option value="55" name="55">55</option>
            <option value="56" name="56">56</option>
            <option value="57" name="57">57</option>
            <option value="58" name="58">58</option>
            <option value="59" name="59">59</option>
            <option value="60" name="60">60</option>
            <option value="61" name="61">61</option>
            <option value="62" name="62">62</option>
            <option value="63" name="63">63</option>
            <option value="64" name="64">64</option>
            <option value="65" name="65">65</option>
            <option value="66" name="66">66</option>
            <option value="67" name="67">67</option>
            <option value="68" name="68">68</option>
            <option value="69" name="69">69</option>
            <option value="70" name="70">70</option>
            <option value="71" name="71">71</option>
            <option value="72" name="72">72</option>
            <option value="73" name="73">73</option>
            <option value="74" name="74">74</option>
            <option value="75" name="75">75</option>
            <option value="76" name="76">76</option>
            <option value="77" name="77">77</option>
            <option value="78" name="78">78</option>
            <option value="79" name="79">79</option>
            <option value="80" name="80">80</option>
            <option value="81" name="81">81</option>
            <option value="82" name="82">82</option>
            <option value="83" name="83">83</option>
            <option value="84" name="84">84</option>
            <option value="85" name="85">85</option>
            <option value="86" name="86">86</option>
            <option value="87" name="87">87</option>
            <option value="88" name="88">88</option>
            <option value="89" name="89">89</option>
            <option value="90" name="90">90</option>
            <option value="91" name="91">91</option>
            <option value="92" name="92">92</option>
            <option value="93" name="93">93</option>
            <option value="94" name="94">94</option>
            <option value="95" name="95">95</option>
            <option value="96" name="96">96</option>
            <option value="97" name="97">97</option>
            <option value="98" name="98">98</option>
            <option value="99" name="99">99</option>
            <option value="100" name="100">100</option>
            <option value="101" name="101">101</option>
            <option value="102" name="102">102</option>
            <option value="103" name="103">103</option>
            <option value="104" name="104">104</option>
            <option value="105" name="105">105</option>
            <option value="106" name="106">106</option>
            <option value="107" name="107">107</option>
            <option value="108" name="108">108</option>
            <option value="109" name="109">109</option>
            <option value="110" name="110">110</option>
            <option value="111" name="111">111</option>
            <option value="112" name="112">112</option>
            <option value="113" name="113">113</option>
            <option value="114" name="114">114</option>
            <option value="115" name="115">115</option>
            <option value="116" name="116">116</option>
            <option value="117" name="117">117</option>
            <option value="118" name="118">118</option>
            <option value="119" name="119">119</option>
            <option value="120" name="120">120</option>
            <option value="121" name="121">121</option>
            <option value="122" name="122">122</option>
            <option value="123" name="123">123</option>
            <option value="124" name="124">124</option>
            <option value="125" name="125">125</option>
            <option value="126" name="126">126</option>
            <option value="127" name="127">127</option>
            <option value="128" name="128">128</option>
            <option value="129" name="129">129</option>
            <option value="130" name="130">130</option>
            <option value="131" name="131">131</option>
            <option value="132" name="132">132</option>
            <option value="133" name="133">133</option>
            <option value="134" name="134">134</option>
            <option value="135" name="135">135</option>
            <option value="136" name="136">136</option>
            <option value="137" name="137">137</option>
            <option value="138" name="138">138</option>
            <option value="139" name="139">139</option>
            <option value="140" name="140">140</option>
            <option value="141" name="141">141</option>
            <option value="142" name="142">142</option>
            <option value="143" name="143">143</option>
            <option value="144" name="144">144</option>
            <option value="145" name="145">145</option>
            <option value="146" name="146">146</option>
            <option value="147" name="147">147</option>
            <option value="148" name="148">148</option>
            <option value="149" name="149">149</option>
            <option value="150" name="150">150</option>
            <option value="151" name="151">151</option>
            <option value="152" name="152">152</option>
            <option value="153" name="153">153</option>
            <option value="154" name="154">154</option>
            <option value="155" name="155">155</option>
            <option value="156" name="156">156</option>
            <option value="157" name="157">157</option>
            <option value="158" name="158">158</option>
            <option value="159" name="159">159</option>
            <option value="160" name="160">160</option>
            <option value="161" name="161">161</option>
            <option value="162" name="162">162</option>
            <option value="163" name="163">163</option>
            <option value="164" name="164">164</option>
            <option value="165" name="165">165</option>
            <option value="166" name="166">166</option>
            <option value="167" name="167">167</option>
            <option value="168" name="168">168</option>
            <option value="169" name="169">169</option>
            <option value="170" name="170">170</option>
            <option value="171" name="171">171</option>
            <option value="172" name="172">172</option>
            <option value="173" name="173">173</option>
        </select>
        <button type="submit">Enviar email</button>
    </form>
    <footer>
        <span class="nomeCompainha">Created by&nbsp;<a class="nomeCompainha" target="_blank" href="https://github.com/pablo-conte"> Pablo's Company ®</a></span>
    </footer>
    
</body>
</html>