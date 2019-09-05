@extends('layouts.pages')

@section('content')
<div class="container">
    <h2>
        Power Sector Stakeholders
    </h2>
    <p>
            The Stakeholders in the Nigerian Electricity Industry are largely split between Government Agencies, Generation and Distribution Companies.
            These stakeholders are listed below with an overview of their roles and links to their respective websites.
    </p>
    <div class="row">
        <div class="col-lg-12">
            <div class="tab">
                <button class="agencies tablinks active" onclick="opentab(event, 'Agencies')">Agencies</button>
                <button class="gencos tablinks" onclick="opentab(event, 'Gencos')">Gencos</button>
                <button class="discos tablinks" onclick="opentab(event, 'Discos')">Discos</button>
            </div>
                
            <div id="Agencies" class="tabcontent" style="overflow-x:auto;">
                    <table>
                        <tbody>
                            <tr>
                                <td width="30%">
                                    <strong>Nigerian Bulk Electricity Trading PLC (NBET)</strong>
                                </td>
                                    <td width="70%"> NBET purchases electricity from Generating Companies through Power Purchase Agreements&nbsp;(PPAs); and uses Vesting contracts to resell to Distribution Companies and other large general service customers who take electricity from the transmission system. NBET is at the center of the industry; ensuring speed, efficiency, &amp; accuracy in system settlement administration.<br>
                                    <a href="http://nbet.com.ng">www.nbet.com.ng</a><br>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <strong>Nigerian Electricity Management Services Agency (NEMSA)</strong></td>
                            <td>NEMSA ensures safety standards in the NESI and all electrical installations. Safety incidents should be reported here.<br>
                            <a href="http://nemsa.gov.ng">www.nemsa.gov.ng</a></td>
                            </tr>
                            <tr>
                            <td>
                                <strong>Rural Electrification Agency (REA)</strong></td>
                            <td>REA is responsible for implementing the Federal Government of Nigeria’s commitment to aggressive rural electrification.<br>
                            <a href="http://rea.gov.ng">www.rea.gov.ng</a></td>
                            </tr>
                            <tr>
                            <td>
                                <strong>Transmission Company of Nigeria (TCN)</strong></td>
                            <td>TCN is responsible for electricity transmission, system operation and electricity trading in the NESI.<br>
                            <a href="http://www.tcnorg.com">www.tcnorg.com</a></td>
                            </tr>
                            <tr>
                            <td>
                                <strong>Nigerian Electricity Regulatory Commission (NERC)</strong></td>
                            <td>&nbsp;The Nigerian Electricity Regulatory Commission is an independent body, established by the Electric Power Sector Reform Act of 2005 to undertake the technical and economic regulation of the Nigerian Electricity Supply Industry. The Commission is to, among others license operators, determine operating codes and standards, establish customer rights and obligations and set cost reflective industry tariffs.<br>
                            <a href="http://nerc.gov.ng">www.nerc.gov.ng</a></td>
                            </tr>
                            <tr>
                            <td>
                                <strong>Nigeria Electricity Liability Management Company (NELMCO)</strong></td>
                            <td>&nbsp;NELMCO is to provide investors confidence that investment in PHCN Successor Companies(SCs) will be free of encumbrances from possible future litigations arising from the huge legacy debts, Staff Pensions, Suppliers and third-party liabilities. To assume and administer the stranded debts and non-core assets of PHCN pursuant to the provisions of EPSR Act 2005.<br>
                            <a href="http://nelmco.gov.ng">www.nelmco.gov.ng</a></td>
                            </tr>
                            <tr>
                            <td>
                                <strong>Niger Delta Power Holding Company (NDPHC)</strong></td>
                            <td>&nbsp;NDPHC was incorporated to manage the National Integrated Power Project (NIPP) which was conceived in 2004 as a fast-track government funded initiative to stabilize Nigeria’s electricity supply system.<br>
                            <a href="http://www.ndphc.net">www.ndphc.net</a></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            
            <div id="Gencos" class="tabcontent" style="overflow-x:auto;">
                    <table>
                        <tbody>
                            <tr>
                            <td><strong>Power Station</strong></td>
                            <td style="width: 172.390625px"><strong>Community</strong></td>
                            <td style="width: 226.421875px"><strong>Type</strong></td>
                            <td style="width: 213.6875px"><strong>Capacity</strong></td>
                            </tr>
                            <tr>
                            <td>AES</td>
                            <td style="width: 172.390625px">Egbin</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">270 MW</td>
                            </tr>
                            <tr>
                            <td>Aba Power Station</td>
                            <td style="width: 172.390625px">Aba, Abia State</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">140 MW</td>
                            </tr>
                            <tr>
                            <td>&nbsp;Afam IV-V</td>
                            <td style="width: 172.390625px">&nbsp;Afam, Rivers State</td>
                            <td style="width: 226.421875px">&nbsp;Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">&nbsp;726 MW (Afam IV -6 x 75&nbsp;MW (GT 13-18), Afam V -2 x 138&nbsp;MW (GT 19-20)</td>
                            </tr>
                            <tr>
                            <td>&nbsp;Afam VI</td>
                            <td style="width: 172.390625px">&nbsp;Afam, Rivers State</td>
                            <td style="width: 226.421875px">&nbsp;Combine Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">&nbsp;624 MW</td>
                            </tr>
                            <tr>
                            <td>&nbsp;Alaoji Power Station</td>
                            <td style="width: 172.390625px">&nbsp;Abia State</td>
                            <td style="width: 226.421875px">&nbsp;Combine Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">&nbsp;1074 MW</td>
                            </tr>
                            <tr>
                            <td>&nbsp;Egbin Thermal Power Station</td>
                            <td style="width: 172.390625px">&nbsp;Lagos State</td>
                            <td style="width: 226.421875px">&nbsp;Gas-fired steam turbine</td>
                            <td style="width: 213.6875px">&nbsp;1320 MW (six 220-MW units</td>
                            </tr>
                            <tr>
                            <td>&nbsp;Egbema Power Station</td>
                            <td style="width: 172.390625px">&nbsp;Imo State</td>
                            <td style="width: 226.421875px">&nbsp;Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">&nbsp;338 MW</td>
                            </tr>
                            <tr>
                            <td>&nbsp;Geregu I Power Station</td>
                            <td style="width: 172.390625px">&nbsp;Kogi State</td>
                            <td style="width: 226.421875px">&nbsp;Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">&nbsp;414 MW</td>
                            </tr>
                            <tr>
                            <td>Geregu NIPP</td>
                            <td style="width: 172.390625px">Kogi State</td>
                            <td style="width: 226.421875px">&nbsp;Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">434 MW</td>
                            </tr>
                            <tr>
                            <td>Ibom Power Station</td>
                            <td style="width: 172.390625px">Ikot Abasi, Akwa Ibom State</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">190 MW</td>
                            </tr>
                            <tr>
                            <td>Ihovbor Power Station NIPP</td>
                            <td style="width: 172.390625px">Benin City, Edo States</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">450 MW</td>
                            </tr>
                            <tr>
                            <td>Odukpani Power Station</td>
                            <td style="width: 172.390625px">Calabar, Cross River State</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">561 MW</td>
                            </tr>
                            <tr>
                            <td>Okpai Power Station</td>
                            <td style="width: 172.390625px">Okpai, Delta State</td>
                            <td style="width: 226.421875px">Combine Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">480 MW</td>
                            </tr>
                            <tr>
                            <td>Olorunsogo Power Station</td>
                            <td style="width: 172.390625px">Olorunsogo, Ogun State</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">336 MW, (8 x 42 MW)</td>
                            </tr>
                            <tr>
                            <td>Olorunsogo II Power Station NIPP</td>
                            <td style="width: 172.390625px">Olorunsogo, Ogun State</td>
                            <td style="width: 226.421875px">Combine Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">675 MW NDPHC (4×112.5&nbsp;MW and 2×112.5&nbsp;MW steam turbines.)</td>
                            </tr>
                            <tr>
                            <td>Omoku Power Station</td>
                            <td style="width: 172.390625px">Omoku, Rivers State</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">150 MW (6 x 25&nbsp;MW gas turbines</td>
                            </tr>
                            <tr>
                            <td>Omoku II Power Station NIPP</td>
                            <td style="width: 172.390625px">Omoku, Rivers State</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">225 MW (2 x 112.5 MW gas turbines</td>
                            </tr>
                            <tr>
                            <td>Omotosho I Power Station</td>
                            <td style="width: 172.390625px">Omotosho, Ondo State</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">336 MW; (8 x 42 MW)</td>
                            </tr>
                            <tr>
                            <td>Omotosho II Power Station</td>
                            <td style="width: 172.390625px">Omotosho, Ondo State</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">450 MW, (4×112.5&nbsp;MW)</td>
                            </tr>
                            <tr>
                            <td>Sapele Power Station</td>
                            <td style="width: 172.390625px">Sapele, Delta State</td>
                            <td style="width: 226.421875px">Gas-fired steam turbine and&nbsp;Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">1020 MW (Phase I: 1978-1980 6 x 120&nbsp;MW Gas-fired steam turbines, phase II: 1981 4 x 75&nbsp;MW gas turbines)</td>
                            </tr>
                            <tr>
                            <td>Sapele II Power Station NIPP</td>
                            <td style="width: 172.390625px">Sapele, Delta State</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">450 MW (4×112.5 MW</td>
                            </tr>
                            <tr>
                            <td>Transcorp Ughelli Power Station</td>
                            <td style="width: 172.390625px">Ughelli, Delta</td>
                            <td style="width: 226.421875px">Simple Cycle Gas Turbine</td>
                            <td style="width: 213.6875px">900 MW</td>
                            </tr>
                            <tr>
                            <td>Jebba Power Station</td>
                            <td style="width: 172.390625px">Niger State</td>
                            <td style="width: 226.421875px">Hydro-electric</td>
                            <td style="width: 213.6875px">540 MW</td>
                            </tr>
                            <tr>
                            <td>Kainji Power Station</td>
                            <td style="width: 172.390625px">Niger State</td>
                            <td style="width: 226.421875px">Hydro-electric</td>
                            <td style="width: 213.6875px">800 MW</td>
                            </tr>
                            <tr>
                            <td>Shiroro Power Station</td>
                            <td style="width: 172.390625px">Niger State</td>
                            <td style="width: 226.421875px">Hydro-electric</td>
                            <td style="width: 213.6875px">600 MW</td>
                            </tr>
                           
                            </tbody>
                        </table>
            </div>
            
            <div id="Discos" class="tabcontent">
                    <table style="height: 2736px;width: 802px">
                        <tbody>
                            <tr>
                            <td ><strong>DisCo Name</strong></td>
                            <td ><strong>Areas Served</strong></td>
                            <td><strong>Contact Details</strong></td>
                            </tr>
                            <tr>
                            <td ><strong>Abuja</strong></td>
                            <td>
                            <ul>
                            <li>FCT</li>
                            <li>Kogi State</li>
                            <li>Nasarawa State</li>
                            <li>Niger State</li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 228px">Address: No. 1 Ziquinchor Street, Off IBB Way, Wuse Zone 4, Abuja.<p></p>
                            <p>Tel: 08150191919,08150181818</p>
                            <p>Email: <a href="mailto:info@abujaelectricity.com">info@abujaelectricity.com</a></p>
                            <p>Website: <a href="http://www.abujaelectricity.com">www.abujaelectricity.com</a></p></td>
                            </tr>
                            <tr style="height: 244px">
                            <td style="width: 112px;height: 244px"><strong>&nbsp;Benin</strong></td>
                            <td style="width: 146px;height: 244px">
                            <ul>
                            <li>Delta State</li>
                            <li>Edo State</li>
                            <li>Ekiti State</li>
                            <li>Ondo State</li>s
                            </ul>
                            </td>
                            <td style="width: 60px;height: 244px">Address: No 5, Akpakpava Street, Benin City, Edo State.<p></p>
                            <p>Tel:&nbsp;08039012323</p>
                            <p>Email:<a href="mailto:customercomplaints@bedcpower.com">customercomplaints@bedcpower.com</a></p>
                            <p>Website: <a href="http://www.bedcpower.com">www.bedcpower.com</a></p>
                            <p>&nbsp;</p></td>
                            </tr>
                            <tr style="height: 324px">
                            <td style="width: 112px;height: 324px"><strong>&nbsp;Eko</strong></td>
                            <td style="width: 146px;height: 324px">
                            <ul>
                            <li>Southern Lagos State: Ojo,Festac,&nbsp; Ijora</li>
                            <li>Mushin – also covers Orile areas</li>
                            <li>Lekki – also covers Ibeju areas</li>
                            <li>Lagos Island – also covers Ajele areas</li>
                            <li>Parts of Ogun State – Agbara</li>
                            <li></li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 324px">Address: 24/25 Marina Street, Lagos Island, Lagos State.<p></p>
                            <p>Tel: 07080655555</p>
                            <p>Email: <a href="mailto:customercare@ekedp.com">customercare@ekedp.com</a></p>
                            <p>Website: <a href="http://www.ekedp.com">www.ekedp.com</a></p></td>
                            </tr>
                            <tr style="height: 204px">
                            <td style="width: 112px;height: 204px">&nbsp;<strong>Enugu</strong></td>
                            <td style="width: 146px;height: 204px">
                            <ul>
                            <li>Abia State</li>
                            <li>Anambra State</li>
                            <li>Imo State</li>
                            <li>Ebonyi State</li>
                            <li>Enugu State</li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 204px">Address:&nbsp;62 Okpara Avenue, Enugu, Enugu State.<p></p>
                            <p>Tel:&nbsp;08121020423</p>
                            <p>Email:&nbsp;<a href="mailto:customerservice@enugudisco.com">customerservice@enugudisco.com</a></p>
                            <p>Website:&nbsp;<a href="http://www.enugudisco.com">www.enugudisco.com</a></p></td>
                            </tr>
                            <tr style="height: 204px">
                            <td style="width: 112px;height: 204px">&nbsp;<strong>Ibadan</strong></td>
                            <td style="width: 146px;height: 204px">
                            <ul>
                            <li>Kwara State</li>
                            <li>Ogun State</li>
                            <li>Osun State</li>
                            <li>Oyo State</li>
                            <li>Parts of Niger, Ekiti and Kogi states</li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 204px">Address:&nbsp;Capital Building, 115 Ring Road, Ibadan, Oyo State.<p></p>
                            <p>Tel:&nbsp;09039000065,&nbsp;09053698850,&nbsp;09053698851</p>
                            <p>Email:&nbsp;<a href="mailto:customercare@ibedc.com">customercare@ibedc.com</a></p>
                            <p>Website:&nbsp;<a href="http://www.ibedc-ng.com">www.ibedc-ng.com</a></p></td>
                            </tr>
                            <tr style="height: 204px">
                            <td style="width: 112px;height: 204px">&nbsp;<strong>Ikeja</strong></td>
                            <td style="width: 146px;height: 204px">
                            <ul>
                                <li>Abule Egba</li>
                                <li>Akowonjo</li>
                                <li>Ikeja</li>
                                <li>Ikorodu</li>
                                <li>Oshodi</li>
                                <li>Shomolu</li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 204px">Address: Secretariat Rd, Alausa-Ikeja, Lagos State.<p></p>
                            <p>Tel: 07000225543, 017000250, 014483900</p>
                            <p>Email: <a href="mailto:info@jedplc.com">info@jedplc.com</a></p>
                            <p>Website: <a href="http://www.ikejaelectric.com">www.ikejaelectric.com</a></p></td>
                            </tr>
                            <tr style="height: 244px">
                            <td style="width: 112px;height: 244px">&nbsp;<strong>Jos</strong></td>
                            <td style="width: 146px;height: 244px">
                            <ul>
                            <li>Bauchi State</li>
                            <li>Benue State</li>
                            <li>Gombe State</li>
                            <li>Plateau State</li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 244px">Address:&nbsp;9 Ahmadu Bello Way, Jos, Plateau State<p></p>
                            <p>Tel:&nbsp;07069403531</p>
                            <p>Email:&nbsp;<a href="mailto:info@jedplc.com">info@jedplc.com</a></p>
                            <p>Website:&nbsp;<a href="http://www.jedplc.com">www.jedplc.com</a></p>
                            <p>&nbsp;</p></td>
                            </tr>
                            <tr style="height: 204px">
                            <td style="width: 112px;height: 204px">&nbsp;<strong>Kaduna</strong></td>
                            <td style="width: 146px;height: 204px">
                            <ul>
                            <li>Kebbi State</li>
                            <li>Kaduna State</li>
                            <li>Sokoto State</li>
                            <li>Zamfara State</li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 204px">Address:&nbsp;No 1-2 Ahmadu Bello Way, Kaduna, Kaduna State.<p></p>
                            <p>Tel:&nbsp;08174035711</p>
                            <p>Email:&nbsp;<a href="mailto:info@kadunaelectric.com">info@kadunaelectric.com</a></p>
                            <p>Website: <a href="https://kadunaelectric.com">www.kadunaelectric.com</a></p></td>
                            </tr>
                            <tr style="height: 228px">
                            <td style="width: 112px;height: 228px">&nbsp;<strong>Kano</strong></td>
                            <td style="width: 146px;height: 228px">
                            <ul>
                            <li>Jigawa State</li>
                            <li>Katsina State</li>
                            <li>Kano State</li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 228px">Address:&nbsp;1 Niger Street/Post Office Road, P.M.B 3089, Kano State.<p></p>
                            <p>Tel:&nbsp;070055551111</p>
                            <p>Email:&nbsp;<a href="mailto:customercare@kedco.ng">customercare@kedco.ng</a></p>
                            <p>Website:&nbsp;<a href="http://www.kedco.ng">www.kedco.ng</a></p></td>
                            </tr>
                            <tr style="height: 268px">
                            <td style="width: 112px;height: 268px"><strong>PortHarcourt</strong></td>
                            <td style="width: 146px;height: 268px">
                            <ul>
                            <li>Akwa Ibom State</li>
                            <li>Bayelsa State</li>
                            <li>Cross River State</li>
                            <li>Rivers State</li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 268px">Address:&nbsp;No 42, Obi Wali Road, Port Harcourt, Rivers State.<p></p>
                            <p>Tel:&nbsp;08139834000,&nbsp;08139834001,&nbsp;08139834002,&nbsp;09087838800,</p>
                            <p>09087838801,&nbsp;09087838802</p>
                            <p>Email:&nbsp;<a href="mailto:customercare@phed.com.ng">customercare@phed.com.ng</a></p>
                            <p>Website:&nbsp;<a href="http://www.phed.com.ng">www.phed.com.ng</a></p></td>
                            </tr>
                            <tr style="height: 188px">
                            <td style="width: 112px;height: 188px"><strong>Yola</strong></td>
                            <td style="width: 146px;height: 188px">
                            <ul>
                            <li>Adamawa State</li>
                            <li>Borno State</li>
                            <li>Yobe State</li>
                            <li>Taraba State</li>
                            </ul>
                            </td>
                            <td style="width: 60px;height: 188px">Address:&nbsp;No 2 Atiku Abubakar Road, Jimeta-Yola, Adamawa State.<p></p>
                            <p>Tel:&nbsp;09038853308,&nbsp;09038853247</p>
                            <p>Website:&nbsp;<a href="http://www.yedc.com.ng">www.yedc.com.ng</a></p></td>
                            </tr>
                            <tr style="height: 52px">
                            <td style="width: 112px;height: 52px"></td>
                            <td style="width: 146px;height: 52px"></td>
                            <td style="width: 60px;height: 52px"></td>
                            </tr>
                            </tbody>
                            </table>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script>
    function opentab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

    
@endsection