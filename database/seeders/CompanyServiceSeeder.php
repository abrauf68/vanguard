<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanyServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_services')->insert([

            // 1. Car Transportation
            [
                'name' => 'Car Transportation',
                'slug' => Str::slug('Car Transportation'),
                'meta_title' => 'Car Transportation Services | Fast, Safe, and Reliable Auto Shipping',
                'meta_description' => 'Professional car transportation services tailored to your needs. Reliable, fast, and fully insured door-to-door vehicle shipping.',
                'details' => '<h1 class="" data-start="233" data-end="309">Car Transportation Services | Safe, Reliable, and Nationwide Auto Shipping</h1>
                <p class="" data-start="311" data-end="717">Looking for a trustworthy and affordable way to transport your car?<br data-start="378" data-end="381">We specialize in <strong data-start="398" data-end="429">car transportation services</strong>, offering <strong data-start="440" data-end="492">safe, efficient, and nationwide vehicle shipping</strong> for both individuals and businesses.<br data-start="529" data-end="532">Whether you\'re <strong data-start="547" data-end="561">relocating</strong>, <strong data-start="563" data-end="584">selling a vehicle</strong>, or need a reliable auto transport solution, our professional network ensures <strong data-start="663" data-end="692">door-to-door car delivery</strong> with care and precision.</p>
                <hr class="" data-start="719" data-end="722">
                <h2 class="" data-start="724" data-end="770">Why Choose Our Car Transportation Services?</h2>
                <h3 class="" data-start="772" data-end="815">1. Door-to-Door Car Pickup and Delivery</h3>
                <p class="" data-start="816" data-end="1040">We provide <strong data-start="827" data-end="857">door-to-door car transport</strong>, meaning we pick up your vehicle from your location and deliver it right to your chosen destination.<br data-start="958" data-end="961">No terminals, no unnecessary stops &mdash; just <strong data-start="1003" data-end="1039">direct, hassle-free car shipping</strong>.</p>
                <h3 class="" data-start="1042" data-end="1090">2. Experienced Drivers and Licensed Carriers</h3>
                <p class="" data-start="1091" data-end="1306">Your vehicle is handled by <strong data-start="1118" data-end="1187">licensed, insured, and highly experienced auto transport carriers</strong>.<br data-start="1188" data-end="1191">Our drivers are trained to ensure safe loading, transit, and unloading, giving your car the protection it deserves.</p>
                <h3 class="" data-start="1308" data-end="1356">3. Full Insurance Coverage for Every Vehicle</h3>
                <p class="" data-start="1357" data-end="1538">For your peace of mind, every shipment includes <strong data-start="1405" data-end="1440">full vehicle insurance coverage</strong> during transport.<br data-start="1458" data-end="1461">You can trust that your car is fully protected against any unexpected events.</p>
                <h3 class="" data-start="1540" data-end="1586">4. Transparent Pricing with No Hidden Fees</h3>
                <p class="" data-start="1587" data-end="1746">We believe in clear, upfront pricing.<br data-start="1624" data-end="1627">Get a <strong data-start="1633" data-end="1662">free, no-obligation quote</strong> and enjoy <strong data-start="1673" data-end="1707">competitive car shipping rates</strong> with absolutely <strong data-start="1724" data-end="1745">no hidden charges</strong>.</p>
                <hr class="" data-start="1748" data-end="1751">
                <h2 class="" data-start="1753" data-end="1785">Our Easy Car Shipping Process</h2>
                <h3 class="" data-start="1787" data-end="1832">Step 1: Request a Free Car Shipping Quote</h3>
                <p class="" data-start="1833" data-end="1963">Fill out our quick online form or call us to receive a <strong data-start="1888" data-end="1918">custom car transport quote</strong> based on your pickup and delivery locations.</p>
                <h3 class="" data-start="1965" data-end="2005">Step 2: Schedule Your Auto Transport</h3>
                <p class="" data-start="2006" data-end="2101">Once you accept the quote, we\'ll arrange the <strong data-start="2051" data-end="2075">best time for pickup</strong> that suits your schedule.</p>
                <h3 class="" data-start="2103" data-end="2148">Step 3: Safe Pickup and Vehicle Transport</h3>
                <p class="" data-start="2149" data-end="2286">Our professional drivers will <strong data-start="2179" data-end="2222">carefully inspect and load your vehicle</strong>, securing it properly for safe transit across cities or states.</p>
                <h3 class="" data-start="2288" data-end="2325">Step 4: Delivery to Your Doorstep</h3>
                <p class="" data-start="2326" data-end="2506">Your car is <strong data-start="2338" data-end="2370">delivered safely and on time</strong> to your desired location.<br data-start="2396" data-end="2399">We conduct a final inspection to ensure your vehicle arrives in <strong data-start="2463" data-end="2485">the same condition</strong> as it was picked up.</p>
                <hr class="" data-start="2508" data-end="2511">
                <h2 class="" data-start="2513" data-end="2561">Types of Car Transportation Services We Offer</h2>
                <ul data-start="2563" data-end="2937">
                <li class="" data-start="2563" data-end="2640">
                <p class="" data-start="2565" data-end="2640"><strong data-start="2565" data-end="2587">Open Car Transport</strong>: Affordable and secure, ideal for everyday vehicles.</p>
                </li>
                <li class="" data-start="2641" data-end="2736">
                <p class="" data-start="2643" data-end="2736"><strong data-start="2643" data-end="2669">Enclosed Car Transport</strong>: Maximum protection for luxury, vintage, exotic, and classic cars.</p>
                </li>
                <li class="" data-start="2737" data-end="2825">
                <p class="" data-start="2739" data-end="2825"><strong data-start="2739" data-end="2765">Expedited Car Shipping</strong>: Faster pickup and delivery options when time matters most.</p>
                </li>
                <li class="" data-start="2826" data-end="2937">
                <p class="" data-start="2828" data-end="2937"><strong data-start="2828" data-end="2868">Dealer and Auction Vehicle Transport</strong>: Seamless shipping for dealerships, auctions, and individual buyers.</p>
                </li>
                </ul>
                <hr class="" data-start="2939" data-end="2942">
                <h2 class="" data-start="2944" data-end="2994">Why Customers Trust Our Auto Transport Services</h2>
                <ul data-start="2996" data-end="3178">
                <li class="" data-start="2996" data-end="3027">
                <p class="" data-start="2998" data-end="3027">5-Star Rated Customer Service</p>
                </li>
                <li class="" data-start="3028" data-end="3064">
                <p class="" data-start="3030" data-end="3064">Nationwide Coverage Across the USA</p>
                </li>
                <li class="" data-start="3065" data-end="3098">
                <p class="" data-start="3067" data-end="3098">Competitive Car Shipping Prices</p>
                </li>
                <li class="" data-start="3099" data-end="3138">
                <p class="" data-start="3101" data-end="3138">Real-Time Shipment Tracking Available</p>
                </li>
                <li class="" data-start="3139" data-end="3178">
                <p class="" data-start="3141" data-end="3178">Personalized Solutions for Every Need</p>
                </li>
                </ul>
                <hr class="" data-start="3180" data-end="3183">
                <h2 class="" data-start="3185" data-end="3228">Stress-Free Car Shipping You Can Rely On</h2>
                <p class="" data-start="3230" data-end="3466">Let us take the hassle out of transporting your vehicle.<br data-start="3286" data-end="3289">With <strong data-start="3294" data-end="3315">expert car movers</strong>, <strong data-start="3317" data-end="3337">insured carriers</strong>, and a <strong data-start="3345" data-end="3387">proven record of successful deliveries</strong>, we make sure your vehicle gets where it needs to be &mdash; safely and stress-free.</p>
                <p class="" data-start="3468" data-end="3597"><strong data-start="3468" data-end="3514">Request your free car shipping quote today</strong> and experience the easiest way to move your car across town or across the country!</p>
            ',
                'meta_image' => 'uploads/company/services/service1.jpg',
                'main_image' => 'uploads/company/services/1745655048_main_image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2. Vehicle Storage
            [
                'name' => 'Vehicle Storage',
                'slug' => Str::slug('Vehicle Storage'),
                'meta_title' => 'Secure Vehicle Storage Solutions | Short & Long-Term',
                'meta_description' => 'Keep your vehicle safe with our climate-controlled, fully secure vehicle storage facilities.',
                'details' => '<h1 class="" data-start="205" data-end="278">Vehicle Storage Services | Safe, Secure, Short &amp; Long-Term Auto Storage</h1>
                        <p class="" data-start="280" data-end="634">Need a safe place to store your vehicle while relocating, traveling, or just freeing up space?<br data-start="374" data-end="377">Our <strong data-start="381" data-end="422">professional vehicle storage services</strong> offer <strong data-start="429" data-end="485">secure, climate-controlled, and monitored facilities</strong> for short-term and long-term needs.<br data-start="521" data-end="524">Whether it&rsquo;s a <strong data-start="539" data-end="578">classic car, motorcycle, SUV, or RV</strong>, we protect your investment with industry-leading care.</p>
                        <hr class="" data-start="636" data-end="639">
                        <h2 class="" data-start="641" data-end="684">Why Choose Our Vehicle Storage Facility?</h2>
                        <h3 class="" data-start="686" data-end="725">1. 24/7 Surveillance &amp; Gated Access</h3>
                        <p class="" data-start="726" data-end="975">Our <strong data-start="730" data-end="758">vehicle storage facility</strong> is equipped with <strong data-start="776" data-end="803">24/7 video surveillance</strong>, gated access, and security systems to ensure your car is protected at all times.<br data-start="885" data-end="888">Enjoy complete peace of mind knowing your vehicle is under watch every hour of the day.</p>
                        <h3 class="" data-start="977" data-end="1023">2. Climate-Controlled Indoor Storage Units</h3>
                        <p class="" data-start="1024" data-end="1232">For luxury, vintage, or delicate vehicles, we offer <strong data-start="1076" data-end="1117">climate-controlled indoor car storage</strong> to prevent damage from temperature changes, humidity, and dust.<br data-start="1181" data-end="1184">Ideal for long-term protection and preservation.</p>
                        <h3 class="" data-start="1234" data-end="1284">3. Outdoor Vehicle Storage for Larger Vehicles</h3>
                        <p class="" data-start="1285" data-end="1474">Need a space for your <strong data-start="1307" data-end="1338">RV, boat, truck, or trailer</strong>?<br data-start="1339" data-end="1342">Our <strong data-start="1346" data-end="1373">outdoor vehicle storage</strong> solutions provide spacious and secure parking spots with the same 24/7 security as our indoor units.</p>
                        <h3 class="" data-start="1476" data-end="1526">4. Flexible &amp; Affordable Monthly Storage Plans</h3>
                        <p class="" data-start="1527" data-end="1725">We offer <strong data-start="1536" data-end="1572">affordable vehicle storage rates</strong> with flexible plans to suit your schedule &mdash; whether you need storage for a few days, weeks, or several months.<br data-start="1683" data-end="1686">No long-term contracts, no hidden fees.</p>
                        <hr class="" data-start="1727" data-end="1730">
                        <h2 class="" data-start="1732" data-end="1761">Types of Vehicles We Store</h2>
                        <ul data-start="1763" data-end="1876">
                        <li class="" data-start="1763" data-end="1778">
                        <p class="" data-start="1765" data-end="1778">Cars &amp; SUVs</p>
                        </li>
                        <li class="" data-start="1779" data-end="1794">
                        <p class="" data-start="1781" data-end="1794">Motorcycles</p>
                        </li>
                        <li class="" data-start="1795" data-end="1821">
                        <p class="" data-start="1797" data-end="1821">Classic &amp; Vintage Cars</p>
                        </li>
                        <li class="" data-start="1822" data-end="1839">
                        <p class="" data-start="1824" data-end="1839">RVs &amp; Campers</p>
                        </li>
                        <li class="" data-start="1840" data-end="1860">
                        <p class="" data-start="1842" data-end="1860">Boats &amp; Trailers</p>
                        </li>
                        <li class="" data-start="1861" data-end="1876">
                        <p class="" data-start="1863" data-end="1876">Trucks &amp; Vans</p>
                        </li>
                        </ul>
                        <p class="" data-start="1878" data-end="1987">From personal cars to commercial fleets, we accommodate all vehicle types with proper storage and protection.</p>
                        <hr class="" data-start="1989" data-end="1992">
                        <h2 class="" data-start="1994" data-end="2037">When to Use Our Vehicle Storage Services</h2>
                        <ul data-start="2039" data-end="2291">
                        <li class="" data-start="2039" data-end="2072">
                        <p class="" data-start="2041" data-end="2072">During a <strong data-start="2050" data-end="2072">relocation or move</strong></p>
                        </li>
                        <li class="" data-start="2073" data-end="2115">
                        <p class="" data-start="2075" data-end="2115">While <strong data-start="2081" data-end="2115">traveling or deployed overseas</strong></p>
                        </li>
                        <li class="" data-start="2116" data-end="2183">
                        <p class="" data-start="2118" data-end="2183">For <strong data-start="2122" data-end="2150">seasonal vehicle storage</strong> (convertibles, RVs, boats, etc.)</p>
                        </li>
                        <li class="" data-start="2184" data-end="2231">
                        <p class="" data-start="2186" data-end="2231">When <strong data-start="2191" data-end="2231">waiting for vehicle shipping or sale</strong></p>
                        </li>
                        <li class="" data-start="2232" data-end="2291">
                        <p class="" data-start="2234" data-end="2291">If you&rsquo;re <strong data-start="2244" data-end="2291">freeing up space in your garage or driveway</strong></p>
                        </li>
                        </ul>
                        <hr class="" data-start="2293" data-end="2296">
                        <h2 class="" data-start="2298" data-end="2333">Trust Us to Protect Your Vehicle</h2>
                        <p class="" data-start="2335" data-end="2587">Our mission is to keep your vehicle <strong data-start="2371" data-end="2407">safe, secure, and ready to drive</strong> when you need it.<br data-start="2425" data-end="2428">With industry-grade security, clean and maintained facilities, and <strong data-start="2495" data-end="2521">customer-first service</strong>, we&rsquo;re the go-to provider for reliable <strong data-start="2561" data-end="2586">car storage solutions</strong>.</p>
                        <hr class="" data-start="2589" data-end="2592">
                        <h2 class="" data-start="2594" data-end="2614">Get Started Today</h2>
                        <p class="" data-start="2616" data-end="2686">📍 Convenient Location<br data-start="2638" data-end="2641">💸 Affordable Pricing<br data-start="2662" data-end="2665">🔒 Maximum Security</p>
                        <p class="" data-start="2688" data-end="2817"><strong data-start="2688" data-end="2708">Contact us today</strong> for a free quote and find the perfect <strong data-start="2747" data-end="2775">vehicle storage solution</strong> for your needs &mdash; short-term or long-term!</p>',
                'meta_image' => 'uploads/company/services/1745655342_meta_image.jpg',
                'main_image' => 'uploads/company/services/1745655342_main_image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 3. Logistics
            [
                'name' => 'Logistics',
                'slug' => Str::slug('Logistics'),
                'meta_title' => 'Automotive Logistics Services | End-to-End Vehicle Transport Solutions',
                'meta_description' => 'Streamline your vehicle shipping with our full-scale logistics solutions tailored for auto dealerships, auctions, and individuals.',
                'details' => '<h1 class="" data-start="210" data-end="287">Logistics Services | End-to-End Vehicle Transportation and Fleet Management</h1>
                        <p class="" data-start="289" data-end="693">Looking for seamless and reliable <strong data-start="323" data-end="345">logistics services</strong> to manage your vehicle transportation needs?<br data-start="390" data-end="393">We offer <strong data-start="402" data-end="439">comprehensive logistics solutions</strong>, including <strong data-start="451" data-end="500">nationwide and international vehicle shipping</strong>, <strong data-start="502" data-end="521">fleet transport</strong>, and <strong data-start="527" data-end="576">specialized logistics for auctions and events</strong>.<br data-start="577" data-end="580">From scheduling pickups to final delivery, we handle every step so you can stay focused on growing your business.</p>
                        <hr class="" data-start="695" data-end="698">
                        <h2 class="" data-start="700" data-end="745">Why Choose Our Vehicle Logistics Services?</h2>
                        <h3 class="" data-start="747" data-end="794">1. Complete End-to-End Logistics Management</h3>
                        <p class="" data-start="795" data-end="983">We manage the entire process &mdash; <strong data-start="826" data-end="905">pickup coordination, safe transport, real-time tracking, and final delivery</strong> &mdash; ensuring a <strong data-start="919" data-end="953">smooth, hassle-free experience</strong> for all your logistics needs.</p>
                        <h3 class="" data-start="985" data-end="1040">2. Nationwide &amp; International Shipping Coordination</h3>
                        <p class="" data-start="1041" data-end="1223">Whether you need <strong data-start="1058" data-end="1088">domestic vehicle transport</strong> across the country or <strong data-start="1111" data-end="1142">international auto shipping</strong>, our logistics network covers all major cities, states, and global destinations.</p>
                        <h3 class="" data-start="1225" data-end="1273">3. Fleet Transport Solutions for Dealerships</h3>
                        <p class="" data-start="1274" data-end="1503">We specialize in <strong data-start="1291" data-end="1310">fleet logistics</strong>, offering efficient <strong data-start="1331" data-end="1363">multi-vehicle transportation</strong> for car dealerships, rental companies, corporate fleets, and more.<br data-start="1430" data-end="1433">Get reliable, scalable solutions tailored to your volume and schedule.</p>
                        <h3 class="" data-start="1505" data-end="1547">4. Auction and Event Vehicle Logistics</h3>
                        <p class="" data-start="1548" data-end="1732">Need to transport vehicles for <strong data-start="1579" data-end="1625">auctions, exhibitions, or corporate events</strong>?<br data-start="1626" data-end="1629">Our team is experienced in <strong data-start="1656" data-end="1694">specialized logistics coordination</strong> for time-sensitive, high-value moves.</p>
                        <h3 class="" data-start="1734" data-end="1778">5. Real-Time Shipment Tracking &amp; Updates</h3>
                        <p class="" data-start="1779" data-end="1941">Stay informed every step of the way.<br data-start="1815" data-end="1818">We provide <strong data-start="1829" data-end="1851">real-time tracking</strong> and regular updates so you always know where your vehicles are and when they will arrive.</p>
                        <hr class="" data-start="1943" data-end="1946">
                        <h2 class="" data-start="1948" data-end="1984">What Our Logistics Services Cover</h2>
                        <ul data-start="1986" data-end="2219">
                        <li class="" data-start="1986" data-end="2017">
                        <p class="" data-start="1988" data-end="2017"><strong data-start="1988" data-end="2017">Vehicle pickup scheduling</strong></p>
                        </li>
                        <li class="" data-start="2018" data-end="2049">
                        <p class="" data-start="2020" data-end="2049"><strong data-start="2020" data-end="2049">Custom transport planning</strong></p>
                        </li>
                        <li class="" data-start="2050" data-end="2092">
                        <p class="" data-start="2052" data-end="2092"><strong data-start="2052" data-end="2092">Nationwide and cross-border shipping</strong></p>
                        </li>
                        <li class="" data-start="2093" data-end="2132">
                        <p class="" data-start="2095" data-end="2132"><strong data-start="2095" data-end="2132">Fleet management and optimization</strong></p>
                        </li>
                        <li class="" data-start="2133" data-end="2174">
                        <p class="" data-start="2135" data-end="2174"><strong data-start="2135" data-end="2174">Auction and event vehicle transport</strong></p>
                        </li>
                        <li class="" data-start="2175" data-end="2219">
                        <p class="" data-start="2177" data-end="2219"><strong data-start="2177" data-end="2219">Shipment tracking and customer support</strong></p>
                        </li>
                        </ul>
                        <hr class="" data-start="2221" data-end="2224">
                        <h2 class="" data-start="2226" data-end="2248">Industries We Serve</h2>
                        <ul data-start="2250" data-end="2439">
                        <li class="" data-start="2250" data-end="2276">
                        <p class="" data-start="2252" data-end="2276">Automotive Dealerships</p>
                        </li>
                        <li class="" data-start="2277" data-end="2301">
                        <p class="" data-start="2279" data-end="2301">Rental Car Companies</p>
                        </li>
                        <li class="" data-start="2302" data-end="2322">
                        <p class="" data-start="2304" data-end="2322">Corporate Fleets</p>
                        </li>
                        <li class="" data-start="2323" data-end="2356">
                        <p class="" data-start="2325" data-end="2356">Auctions and Event Organizers</p>
                        </li>
                        <li class="" data-start="2357" data-end="2392">
                        <p class="" data-start="2359" data-end="2392">Moving and Relocation Companies</p>
                        </li>
                        <li class="" data-start="2393" data-end="2439">
                        <p class="" data-start="2395" data-end="2439">Individual Clients with Bulk Transport Needs</p>
                        </li>
                        </ul>
                        <hr class="" data-start="2441" data-end="2444">
                        <h2 class="" data-start="2446" data-end="2479">Benefits of Partnering With Us</h2>
                        <ul data-start="2481" data-end="2685">
                        <li class="" data-start="2481" data-end="2513">
                        <p class="" data-start="2483" data-end="2513">Customized logistics solutions</p>
                        </li>
                        <li class="" data-start="2514" data-end="2545">
                        <p class="" data-start="2516" data-end="2545">Cost-effective shipping rates</p>
                        </li>
                        <li class="" data-start="2546" data-end="2574">
                        <p class="" data-start="2548" data-end="2574">Dedicated account managers</p>
                        </li>
                        <li class="" data-start="2575" data-end="2610">
                        <p class="" data-start="2577" data-end="2610">Secure and insured transportation</p>
                        </li>
                        <li class="" data-start="2611" data-end="2642">
                        <p class="" data-start="2613" data-end="2642">Timely pickups and deliveries</p>
                        </li>
                        <li class="" data-start="2643" data-end="2685">
                        <p class="" data-start="2645" data-end="2685">Scalable logistics for any business size</p>
                        </li>
                        </ul>
                        <hr class="" data-start="2687" data-end="2690">
                        <h2 class="" data-start="2692" data-end="2732">Simplify Your Vehicle Logistics Today</h2>
                        <p class="" data-start="2734" data-end="2962">Managing vehicle transportation shouldn\'t be complicated.<br data-start="2791" data-end="2794">With our <strong data-start="2803" data-end="2838">professional logistics services</strong>, you get <strong data-start="2848" data-end="2916">expert coordination, guaranteed security, and on-time deliveries</strong> &mdash; all backed by outstanding customer support.</p>
                        <p class="" data-start="2964" data-end="3062"><strong data-start="2964" data-end="2984">Contact us today</strong> to discuss your logistics needs and receive a customized transportation plan!</p>',
                'meta_image' => 'uploads/company/services/service3.jpg',
                'main_image' => 'uploads/company/services/service-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 4. Express Delivery
            [
                'name' => 'Express Delivery',
                'slug' => Str::slug('Express Delivery'),
                'meta_title' => 'Express Car Delivery | Fast & Time-Sensitive Auto Transport',
                'meta_description' => 'Need your vehicle delivered ASAP? Choose our express auto delivery service for guaranteed fast shipping.',
                'details' => '<h1 class="" data-start="179" data-end="259">Express Car Delivery Services | Fast, Reliable, and Priority Vehicle Transport</h1>
                    <p class="" data-start="261" data-end="556">Need your vehicle moved <strong data-start="285" data-end="306">fast and securely</strong>?<br data-start="307" data-end="310">Our <strong data-start="314" data-end="346">express car delivery service</strong> guarantees <strong data-start="358" data-end="380">priority transport</strong> with <strong data-start="386" data-end="410">expedited scheduling</strong>, <strong data-start="412" data-end="434">dedicated carriers</strong>, and <strong data-start="440" data-end="471">guaranteed delivery windows</strong> &mdash; perfect for emergency moves, last-minute relocations, or time-sensitive shipments.</p>
                    <p class="" data-start="558" data-end="648">When every minute matters, we deliver &mdash; faster, safer, and more reliably than anyone else.</p>
                    <hr class="" data-start="650" data-end="653">
                    <h2 class="" data-start="655" data-end="702">Why Choose Our Express Car Delivery Service?</h2>
                    <h3 class="" data-start="704" data-end="742">1. Expedited Scheduling and Pickup</h3>
                    <p class="" data-start="743" data-end="890">We prioritize your shipment from the moment you book.<br data-start="796" data-end="799"><strong data-start="799" data-end="831">Same-day or next-day pickups</strong> are available depending on your location and requirements.</p>
                    <h3 class="" data-start="892" data-end="926">2. Guaranteed Delivery Windows</h3>
                    <p class="" data-start="927" data-end="1068">Stay stress-free with <strong data-start="949" data-end="978">guaranteed delivery times</strong>.<br data-start="979" data-end="982">We commit to delivering your vehicle within a specific window &mdash; no delays, no excuses.</p>
                    <h3 class="" data-start="1070" data-end="1117">3. Priority Service with Dedicated Carriers</h3>
                    <p class="" data-start="1118" data-end="1287">Your vehicle travels on <strong data-start="1142" data-end="1172">special expedited carriers</strong> that handle only high-priority shipments, ensuring <strong data-start="1224" data-end="1241">minimal stops</strong> and <strong data-start="1246" data-end="1266">direct transport</strong> to your destination.</p>
                    <hr class="" data-start="1289" data-end="1292">
                    <h2 class="" data-start="1294" data-end="1309">Perfect for:</h2>
                    <ul data-start="1311" data-end="1474">
                    <li class="" data-start="1311" data-end="1336">
                    <p class="" data-start="1313" data-end="1336">Emergency relocations</p>
                    </li>
                    <li class="" data-start="1337" data-end="1379">
                    <p class="" data-start="1339" data-end="1379">Last-minute vehicle purchases or sales</p>
                    </li>
                    <li class="" data-start="1380" data-end="1415">
                    <p class="" data-start="1382" data-end="1415">Expedited dealership deliveries</p>
                    </li>
                    <li class="" data-start="1416" data-end="1447">
                    <p class="" data-start="1418" data-end="1447">Special events and auctions</p>
                    </li>
                    <li class="" data-start="1448" data-end="1474">
                    <p class="" data-start="1450" data-end="1474">Premium service requests</p>
                    </li>
                    </ul>
                    <hr class="" data-start="1476" data-end="1479">
                    <h2 class="" data-start="1481" data-end="1518">How Our Express Car Delivery Works</h2>
                    <ol data-start="1520" data-end="1882">
                    <li class="" data-start="1520" data-end="1610">
                    <p class="" data-start="1523" data-end="1610"><strong data-start="1523" data-end="1555">Request a Free Express Quote</strong><br data-start="1555" data-end="1558">Get an immediate quote with rush service pricing.</p>
                    </li>
                    <li class="" data-start="1612" data-end="1699">
                    <p class="" data-start="1615" data-end="1699"><strong data-start="1615" data-end="1642">Book Priority Transport</strong><br data-start="1642" data-end="1645">Confirm your booking and schedule expedited pickup.</p>
                    </li>
                    <li class="" data-start="1701" data-end="1790">
                    <p class="" data-start="1704" data-end="1790"><strong data-start="1704" data-end="1725">Real-Time Updates</strong><br data-start="1725" data-end="1728">Receive constant tracking updates and direct communication.</p>
                    </li>
                    <li class="" data-start="1792" data-end="1882">
                    <p class="" data-start="1795" data-end="1882"><strong data-start="1795" data-end="1823">Guaranteed Fast Delivery</strong><br data-start="1823" data-end="1826">Your vehicle arrives safely and on time &mdash; every time.</p>
                    </li>
                    </ol>
                    <hr class="" data-start="1884" data-end="1887">
                    <h2 class="" data-start="1889" data-end="1944">Benefits of Choosing Our Expedited Vehicle Transport</h2>
                    <ul data-start="1946" data-end="2149">
                    <li class="" data-start="1946" data-end="1974">
                    <p class="" data-start="1948" data-end="1974">Immediate pickup options</p>
                    </li>
                    <li class="" data-start="1975" data-end="2006">
                    <p class="" data-start="1977" data-end="2006">Reliable delivery deadlines</p>
                    </li>
                    <li class="" data-start="2007" data-end="2036">
                    <p class="" data-start="2009" data-end="2036">Priority customer support</p>
                    </li>
                    <li class="" data-start="2037" data-end="2072">
                    <p class="" data-start="2039" data-end="2072">Fully insured express shipments</p>
                    </li>
                    <li class="" data-start="2073" data-end="2111">
                    <p class="" data-start="2075" data-end="2111">Professional, experienced carriers</p>
                    </li>
                    <li class="" data-start="2112" data-end="2149">
                    <p class="" data-start="2114" data-end="2149">Transparent express service pricing</p>
                    </li>
                    </ul>
                    <hr class="" data-start="2151" data-end="2154">
                    <h2 class="" data-start="2156" data-end="2195">Get Your Car Delivered Fast and Safe</h2>
                    <p class="" data-start="2197" data-end="2404">We understand that some situations just can\'t wait.<br data-start="2248" data-end="2251">With our <strong data-start="2260" data-end="2293">express car delivery services</strong>, you can trust that your vehicle is treated with urgency, care, and the highest priority from start to finish.</p>
                    <p class="" data-start="2406" data-end="2493"><strong data-start="2406" data-end="2426">Contact us today</strong> to check availability and get a custom <strong data-start="2466" data-end="2492">express delivery quote</strong>!</p>',
                'meta_image' => 'uploads/company/services/service4.jpg',
                'main_image' => 'uploads/company/services/service-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 5. Enclosed Transport
            [
                'name' => 'Enclosed Transport',
                'slug' => Str::slug('Enclosed Transport'),
                'meta_title' => 'Enclosed Vehicle Transport | Ultimate Protection for Luxury Cars',
                'meta_description' => 'Protect your high-value vehicle from the elements with our fully enclosed auto transport trailers.',
                'details' => '<h1 class="" data-start="186" data-end="250">Real-Time Vehicle Tracking Services | Stay Informed Every Mile</h1>
                    <p class="" data-start="252" data-end="563">With our <strong data-start="261" data-end="297">advanced vehicle tracking system</strong>, you&rsquo;ll know exactly where your car is &mdash; from pickup to final delivery.<br data-start="369" data-end="372">We offer <strong data-start="381" data-end="402">live GPS tracking</strong>, <strong data-start="404" data-end="431">real-time notifications</strong>, and <strong data-start="437" data-end="467">dedicated customer support</strong>, so you can enjoy complete transparency and <strong data-start="512" data-end="529">peace of mind</strong> throughout the transport journey.</p>
                    <p class="" data-start="565" data-end="646">Because knowing your vehicle&rsquo;s location shouldn&rsquo;t be a mystery &mdash; it&rsquo;s your right.</p>
                    <hr class="" data-start="648" data-end="651">
                    <h2 class="" data-start="653" data-end="696">Why Choose Our Vehicle Tracking Service?</h2>
                    <h3 class="" data-start="698" data-end="737">1. Live GPS Tracking During Transit</h3>
                    <p class="" data-start="738" data-end="895">Stay connected with <strong data-start="758" data-end="783">real-time GPS updates</strong>.<br data-start="784" data-end="787">Monitor your vehicle\'s exact location at every stage of its journey through your phone, tablet, or computer.</p>
                    <h3 class="" data-start="897" data-end="938">2. ETA Notifications via SMS or Email</h3>
                    <p class="" data-start="939" data-end="1107">Receive <strong data-start="947" data-end="974">automated notifications</strong> with <strong data-start="980" data-end="1015">estimated time of arrival (ETA)</strong> updates.<br data-start="1024" data-end="1027">Choose to get alerts via <strong data-start="1052" data-end="1075">SMS, email, or both</strong> &mdash; whichever works best for you.</p>
                    <h3 class="" data-start="1109" data-end="1147">3. Dedicated Customer Support Team</h3>
                    <p class="" data-start="1148" data-end="1301">Have questions or need updates?<br data-start="1179" data-end="1182">Our <strong data-start="1186" data-end="1202">support team</strong> is always ready to assist you with personalized tracking updates and transport status information.</p>
                    <hr class="" data-start="1303" data-end="1306">
                    <h2 class="" data-start="1308" data-end="1358">Key Features of Our Vehicle Tracking Technology</h2>
                    <ul data-start="1360" data-end="1622">
                    <li class="" data-start="1360" data-end="1395">
                    <p class="" data-start="1362" data-end="1395">Real-time GPS location tracking</p>
                    </li>
                    <li class="" data-start="1396" data-end="1431">
                    <p class="" data-start="1398" data-end="1431">Detailed trip history available</p>
                    </li>
                    <li class="" data-start="1432" data-end="1471">
                    <p class="" data-start="1434" data-end="1471">Instant pickup and delivery updates</p>
                    </li>
                    <li class="" data-start="1472" data-end="1536">
                    <p class="" data-start="1474" data-end="1536">Customizable alert settings (text, email, app notifications)</p>
                    </li>
                    <li class="" data-start="1537" data-end="1575">
                    <p class="" data-start="1539" data-end="1575">Secure and private tracking system</p>
                    </li>
                    <li class="" data-start="1576" data-end="1622">
                    <p class="" data-start="1578" data-end="1622">Direct access to support for live assistance</p>
                    </li>
                    </ul>
                    <hr class="" data-start="1624" data-end="1627">
                    <h2 class="" data-start="1629" data-end="1672">Benefits of Our Vehicle Tracking Service</h2>
                    <ul data-start="1674" data-end="1923">
                    <li class="" data-start="1674" data-end="1716">
                    <p class="" data-start="1676" data-end="1716"><strong data-start="1676" data-end="1697">Full transparency</strong> during transport</p>
                    </li>
                    <li class="" data-start="1717" data-end="1755">
                    <p class="" data-start="1719" data-end="1755"><strong data-start="1719" data-end="1737">Reduced stress</strong> and uncertainty</p>
                    </li>
                    <li class="" data-start="1756" data-end="1804">
                    <p class="" data-start="1758" data-end="1804"><strong data-start="1758" data-end="1782">Timely communication</strong> for better planning</p>
                    </li>
                    <li class="" data-start="1805" data-end="1858">
                    <p class="" data-start="1807" data-end="1858"><strong data-start="1807" data-end="1841">Enhanced trust and reliability</strong> in our service</p>
                    </li>
                    <li class="" data-start="1859" data-end="1923">
                    <p class="" data-start="1861" data-end="1923"><strong data-start="1861" data-end="1878">Peace of mind</strong> knowing your vehicle is safe and on schedule</p>
                    </li>
                    </ul>
                    <hr class="" data-start="1925" data-end="1928">
                    <h2 class="" data-start="1930" data-end="1963">How Our Vehicle Tracking Works</h2>
                    <ol data-start="1965" data-end="2413">
                    <li class="" data-start="1965" data-end="2086">
                    <p class="" data-start="1968" data-end="2086"><strong data-start="1968" data-end="2013">Book Your Transport with Tracking Enabled</strong><br data-start="2013" data-end="2016">Vehicle tracking is included in your service at no additional cost.</p>
                    </li>
                    <li class="" data-start="2088" data-end="2202">
                    <p class="" data-start="2091" data-end="2202"><strong data-start="2091" data-end="2128">Receive Your Tracking Information</strong><br data-start="2128" data-end="2131">Get a tracking link and notification setup options via SMS or email.</p>
                    </li>
                    <li class="" data-start="2204" data-end="2322">
                    <p class="" data-start="2207" data-end="2322"><strong data-start="2207" data-end="2240">Monitor Progress in Real Time</strong><br data-start="2240" data-end="2243">Stay informed with live updates and ETAs until your car is safely delivered.</p>
                    </li>
                    <li class="" data-start="2324" data-end="2413">
                    <p class="" data-start="2327" data-end="2413"><strong data-start="2327" data-end="2350">Get Support Anytime</strong><br data-start="2350" data-end="2353">Need assistance? Our team is just a call or message away.</p>
                    </li>
                    </ol>
                    <hr class="" data-start="2415" data-end="2418">
                    <h2 class="" data-start="2420" data-end="2456">Always Know Where Your Vehicle Is</h2>
                    <p class="" data-start="2458" data-end="2664">Your vehicle is valuable &mdash; and so is your peace of mind.<br data-start="2514" data-end="2517">With our <strong data-start="2526" data-end="2564">real-time vehicle tracking service</strong>, you&rsquo;ll always be in control, always informed, and always confident that your car is in good hands.</p>
                    <p class="" data-start="2666" data-end="2771"><strong data-start="2666" data-end="2686">Contact us today</strong> to schedule your transport and experience stress-free shipping with full visibility!</p>',
                'meta_image' => 'uploads/company/services/1745655592_meta_image.jpg',
                'main_image' => 'uploads/company/services/1745655592_main_image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 6. Vehicle Tracking
            [
                'name' => 'Vehicle Tracking',
                'slug' => Str::slug('Vehicle Tracking'),
                'meta_title' => 'Real-Time Vehicle Tracking | Monitor Your Shipment 24/7',
                'meta_description' => 'Stay in the loop with our advanced vehicle tracking system. Know exactly where your car is, anytime.',
                'details' => '<h1 class="" data-start="186" data-end="250">Real-Time Vehicle Tracking Services | Stay Informed Every Mile</h1>
                    <p class="" data-start="252" data-end="563">With our <strong data-start="261" data-end="297">advanced vehicle tracking system</strong>, you&rsquo;ll know exactly where your car is &mdash; from pickup to final delivery.<br data-start="369" data-end="372">We offer <strong data-start="381" data-end="402">live GPS tracking</strong>, <strong data-start="404" data-end="431">real-time notifications</strong>, and <strong data-start="437" data-end="467">dedicated customer support</strong>, so you can enjoy complete transparency and <strong data-start="512" data-end="529">peace of mind</strong> throughout the transport journey.</p>
                    <p class="" data-start="565" data-end="646">Because knowing your vehicle&rsquo;s location shouldn&rsquo;t be a mystery &mdash; it&rsquo;s your right.</p>
                    <hr class="" data-start="648" data-end="651">
                    <h2 class="" data-start="653" data-end="696">Why Choose Our Vehicle Tracking Service?</h2>
                    <h3 class="" data-start="698" data-end="737">1. Live GPS Tracking During Transit</h3>
                    <p class="" data-start="738" data-end="895">Stay connected with <strong data-start="758" data-end="783">real-time GPS updates</strong>.<br data-start="784" data-end="787">Monitor your vehicle\'s exact location at every stage of its journey through your phone, tablet, or computer.</p>
                    <h3 class="" data-start="897" data-end="938">2. ETA Notifications via SMS or Email</h3>
                    <p class="" data-start="939" data-end="1107">Receive <strong data-start="947" data-end="974">automated notifications</strong> with <strong data-start="980" data-end="1015">estimated time of arrival (ETA)</strong> updates.<br data-start="1024" data-end="1027">Choose to get alerts via <strong data-start="1052" data-end="1075">SMS, email, or both</strong> &mdash; whichever works best for you.</p>
                    <h3 class="" data-start="1109" data-end="1147">3. Dedicated Customer Support Team</h3>
                    <p class="" data-start="1148" data-end="1301">Have questions or need updates?<br data-start="1179" data-end="1182">Our <strong data-start="1186" data-end="1202">support team</strong> is always ready to assist you with personalized tracking updates and transport status information.</p>
                    <hr class="" data-start="1303" data-end="1306">
                    <h2 class="" data-start="1308" data-end="1358">Key Features of Our Vehicle Tracking Technology</h2>
                    <ul data-start="1360" data-end="1622">
                    <li class="" data-start="1360" data-end="1395">
                    <p class="" data-start="1362" data-end="1395">Real-time GPS location tracking</p>
                    </li>
                    <li class="" data-start="1396" data-end="1431">
                    <p class="" data-start="1398" data-end="1431">Detailed trip history available</p>
                    </li>
                    <li class="" data-start="1432" data-end="1471">
                    <p class="" data-start="1434" data-end="1471">Instant pickup and delivery updates</p>
                    </li>
                    <li class="" data-start="1472" data-end="1536">
                    <p class="" data-start="1474" data-end="1536">Customizable alert settings (text, email, app notifications)</p>
                    </li>
                    <li class="" data-start="1537" data-end="1575">
                    <p class="" data-start="1539" data-end="1575">Secure and private tracking system</p>
                    </li>
                    <li class="" data-start="1576" data-end="1622">
                    <p class="" data-start="1578" data-end="1622">Direct access to support for live assistance</p>
                    </li>
                    </ul>
                    <hr class="" data-start="1624" data-end="1627">
                    <h2 class="" data-start="1629" data-end="1672">Benefits of Our Vehicle Tracking Service</h2>
                    <ul data-start="1674" data-end="1923">
                    <li class="" data-start="1674" data-end="1716">
                    <p class="" data-start="1676" data-end="1716"><strong data-start="1676" data-end="1697">Full transparency</strong> during transport</p>
                    </li>
                    <li class="" data-start="1717" data-end="1755">
                    <p class="" data-start="1719" data-end="1755"><strong data-start="1719" data-end="1737">Reduced stress</strong> and uncertainty</p>
                    </li>
                    <li class="" data-start="1756" data-end="1804">
                    <p class="" data-start="1758" data-end="1804"><strong data-start="1758" data-end="1782">Timely communication</strong> for better planning</p>
                    </li>
                    <li class="" data-start="1805" data-end="1858">
                    <p class="" data-start="1807" data-end="1858"><strong data-start="1807" data-end="1841">Enhanced trust and reliability</strong> in our service</p>
                    </li>
                    <li class="" data-start="1859" data-end="1923">
                    <p class="" data-start="1861" data-end="1923"><strong data-start="1861" data-end="1878">Peace of mind</strong> knowing your vehicle is safe and on schedule</p>
                    </li>
                    </ul>
                    <hr class="" data-start="1925" data-end="1928">
                    <h2 class="" data-start="1930" data-end="1963">How Our Vehicle Tracking Works</h2>
                    <ol data-start="1965" data-end="2413">
                    <li class="" data-start="1965" data-end="2086">
                    <p class="" data-start="1968" data-end="2086"><strong data-start="1968" data-end="2013">Book Your Transport with Tracking Enabled</strong><br data-start="2013" data-end="2016">Vehicle tracking is included in your service at no additional cost.</p>
                    </li>
                    <li class="" data-start="2088" data-end="2202">
                    <p class="" data-start="2091" data-end="2202"><strong data-start="2091" data-end="2128">Receive Your Tracking Information</strong><br data-start="2128" data-end="2131">Get a tracking link and notification setup options via SMS or email.</p>
                    </li>
                    <li class="" data-start="2204" data-end="2322">
                    <p class="" data-start="2207" data-end="2322"><strong data-start="2207" data-end="2240">Monitor Progress in Real Time</strong><br data-start="2240" data-end="2243">Stay informed with live updates and ETAs until your car is safely delivered.</p>
                    </li>
                    <li class="" data-start="2324" data-end="2413">
                    <p class="" data-start="2327" data-end="2413"><strong data-start="2327" data-end="2350">Get Support Anytime</strong><br data-start="2350" data-end="2353">Need assistance? Our team is just a call or message away.</p>
                    </li>
                    </ol>
                    <hr class="" data-start="2415" data-end="2418">
                    <h2 class="" data-start="2420" data-end="2456">Always Know Where Your Vehicle Is</h2>
                    <p class="" data-start="2458" data-end="2664">Your vehicle is valuable &mdash; and so is your peace of mind.<br data-start="2514" data-end="2517">With our <strong data-start="2526" data-end="2564">real-time vehicle tracking service</strong>, you&rsquo;ll always be in control, always informed, and always confident that your car is in good hands.</p>
                    <p class="" data-start="2666" data-end="2771"><strong data-start="2666" data-end="2686">Contact us today</strong> to schedule your transport and experience stress-free shipping with full visibility!</p>',
                'meta_image' => 'uploads/company/services/service6.jpg',
                'main_image' => 'uploads/company/services/1745655724_main_image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
