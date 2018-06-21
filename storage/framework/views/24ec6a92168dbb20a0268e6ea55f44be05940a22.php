<nav class="fast-find-panel">
    <div class="fast-find-line" style="right: 0px;">
        <div class="form">
            <a href="#" class="full-view">Switch to full view</a> <a class="login" href="#">Login</a>
            <form id="fast-find-form">
                <input type="search" class="text-input" name="term" required placeholder="@fastFindTitle">
                <div class="fast-find-filter sub-section full-width">
                    <select name="search_section">
                        <option value="all">ALL</option>
                        <option value="for-charter">FOR CHARTER</option>
                        <option value="for-sale">FOR SALE</option>
                        <option value="semi-custom-yachts">SEMI-CUSTOM YACHTS</option>
                        <option value="yachts-concepts">YACHTS CONCEPTS</option>
                        <option value="brokers">BROKERS</option>
                        <option value="destination-guide">DESTINATION GUIDE</option>
                        <option value="directory">DIRECTORY</option>
                        <option value="marinas">MARINAS</option>
                        <option value="lifestyle">LIFESTYLE</option>
                        <option value="news">NEWS</option>
                        <option value="fleet">FLEET</option>
                        <option value="videos">VIDEOS</option>
                    </select>
                </div>
                <div class="fast-find-options-holder for-charter">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>AREA</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <h3 class="title">SEARCH BY</h3>
                    <div class="radio-column half-width">
                        <input type="radio" name="for-charter-search-by" id="for-charter-search-by-price" value="price">
                        <label for="for-charter-search-by-price">PRICE</label>
                        <input type="radio" name="for-charter-search-by" id="for-charter-search-by-length" value="length">
                        <label for="for-charter-search-by-length">LENGTH</label>
                    </div>
                    <div class="radio-column half-width">
                        <input type="radio" name="for-charter-search-by" id="for-charter-search-by-shipyard" value="shipyard">
                        <label for="for-charter-search-by-shipyard">SHIPYARD</label>
                        <input type="radio" name="for-charter-search-by" id="for-charter-search-by-name" value="name">
                        <label for="for-charter-search-by-name">NAME</label>
                    </div>
                    <div class="fast-find-options-holder for-charter-sub price">
                        <h3 class="title">SEARCH BY PRICE</h3>
                        <div class="radio-column half-width">
                            <input type="radio" name="for-charter-search-by-price" id="for-charter-search-by-price-per-yacht" checked="checked" value="per-yacht">
                            <label for="for-charter-search-by-price-per-yacht">PER YACHT</label>
                        </div>
                        <div class="radio-column half-width">
                            <input type="radio" name="for-charter-search-by-price" id="for-charter-search-by-price-per-head" value="per-head">
                            <label for="for-charter-search-by-price-per-head">PER HEAD</label>
                        </div>
                        <div class="fast-find-range charter-rate">
                            <h3 class="title">SELECT CHARTER RATE</h3>
                            <p><input class="amount" readonly /></p>
                            <div class="slider-range"></div>
                        </div>
                    </div>
                    <div class="fast-find-options-holder for-charter-sub shipyard">
                        <div class="fast-find-filter full-width">
                            <select>
                                <option>SELECT SHIPYARD</option>
                                <option>Option #1</option>
                                <option>Option #2</option>
                                <option>Option #3</option>
                                <option>Option #4</option>
                                <option>Option #5</option>
                            </select>
                        </div>
                    </div>
                    <div class="fast-find-options-holder for-charter-sub charter-length">
                        <div class="fast-find-range length">
                            <h3 class="title">SELECT LENGTH</h3>
                            <p><input class="amount" readonly /></p>
                            <div class="slider-range"></div>
                        </div>
                    </div>
                    <div class="fast-find-options-holder for-charter-sub name">
                        <input type="search" class="text-input" placeholder="ENTER NAME">
                    </div>
                </div>
                <div class="fast-find-options-holder for-sale">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>ALL YACHTS</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <h3 class="title">CONDITION</h3>
                    <div class="radio-column third-width">
                        <input type="radio" name="for-sale-search-by-condition" id="for-sale-search-by-condition-all" checked="checked" value="all">
                        <label for="for-sale-search-by-condition-all">ALL</label>
                    </div>
                    <div class="radio-column third-width">
                        <input type="radio" name="for-sale-search-by-condition" id="for-sale-search-by-condition-new" value="new">
                        <label for="for-sale-search-by-condition-new">NEW</label>
                    </div>
                    <div class="radio-column third-width">
                        <input type="radio" name="for-sale-search-by-condition" id="for-sale-search-by-condition-used" value="used">
                        <label for="for-sale-search-by-condition-used">USED</label>
                    </div>
                    <div class="fast-find-range sale-rate">
                        <h3 class="title">PRICE</h3>
                        <p>
                            <input class="amount" readonly />
                        </p>
                        <div class="slider-range"></div>
                    </div>
                    <div class="fast-find-range sale-length">
                        <h3 class="title">LENGTH</h3>
                        <p>
                            <input class="amount" readonly />
                        </p>
                        <div class="slider-range"></div>
                    </div>
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT SHIPYARD</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT MODEL</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                </div>
                <div class="fast-find-options-holder semi-custom-yachts">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>ALL YACHTS</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT YACHT DESIGNER</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <div class="fast-find-range semi-custom-yachts-length">
                        <h3 class="title">LENGTH</h3>
                        <p>
                            <input class="amount" readonly />
                        </p>
                        <div class="slider-range"></div>
                    </div>
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT SHIPYARD</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT MODEL</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                </div>
                <div class="fast-find-options-holder yachts-concepts">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>ALL YACHTS</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT YACHT DESIGNER</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <div class="fast-find-range yachts-concepts-length">
                        <h3 class="title">LENGTH</h3>
                        <p>
                            <input class="amount" readonly />
                        </p>
                        <div class="slider-range"></div>
                    </div>
                </div>
                <div class="fast-find-options-holder brokers">
                    <input type="search" class="text-input" placeholder="BROKER NAME">
                </div>
                <div class="fast-find-options-holder destination-guide">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT REGION</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT DESTINATION</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <input type="search" class="text-input" placeholder="ENTER KEYWORDS">
                </div>
                <div class="fast-find-options-holder directory">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SHIPYARDS</option>
                            <option>REFITTERS</option>
                            <option>NAVAL ARCHITECTS</option>
                            <option>EXTERIOR DESIGNERS</option>
                            <option>INTERIOR DESIGNERS</option>
                        </select>
                    </div>
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT COUNTRY</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <input type="search" class="text-input" placeholder="ENTER KEYWORDS">
                </div>
                <div class="fast-find-options-holder marinas">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT LOCATION</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <input type="search" class="text-input" placeholder="ENTER MARINA NAME">
                    <div class="fast-find-range marinas-length">
                        <h3 class="title">LENGTH</h3>
                        <p>
                            <input class="amount" readonly />
                        </p>
                        <div class="slider-range"></div>
                    </div>
                    <div class="fast-find-range marinas-draft">
                        <h3 class="title">DRAFT</h3>
                        <p>
                            <input class="amount" readonly />
                        </p>
                        <div class="slider-range"></div>
                    </div>
                    <div class="fast-find-range marinas-beam">
                        <h3 class="title">BEAM</h3>
                        <p>
                            <input class="amount" readonly />
                        </p>
                        <div class="slider-range"></div>
                    </div>
                    <h3 class="title">AMENITIES REQUIRED</h3>
                    <div class="radio-column third-width">
                        <input type="radio" name="marinas-amenities1" id="marinas-amenities-water" checked="checked" value="water">
                        <label for="marinas-amenities-water">WATER</label>
                    </div>
                    <div class="radio-column third-width">
                        <input type="radio" name="marinas-amenities1" id="marinas-amenities-fuel" value="fuel">
                        <label for="marinas-amenities-fuel">FUEL</label>
                    </div>
                    <div class="radio-column third-width">
                        <input type="radio" name="marinas-amenities1" id="marinas-amenities-electricity" value="electricity">
                        <label for="marinas-amenities-electricity">ELECTRICITY</label>
                    </div>
                    <div class="radio-column half-width">
                        <input type="radio" name="marinas-amenities2" id="marinas-amenities-waste-disposal" checked="checked" value="waste-disposal">
                        <label for="marinas-amenities-waste-disposal">WASTE DISPOSAL</label>
                    </div>
                    <div class="radio-column half-width">
                        <input type="radio" name="marinas-amenities2" id="marinas-amenities-security" value="security">
                        <label for="marinas-amenities-security">SECURITY</label>
                    </div>
                </div>
                <div class="fast-find-options-holder lifestyle">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SELECT CATEGORY</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <input type="search" class="text-input" placeholder="ENTER KEYWORDS">
                </div>
                <div class="fast-find-options-holder news">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>INDUSTRY NEWS</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <input type="search" class="text-input" placeholder="ENTER KEYWORDS">
                </div>
                <div class="fast-find-options-holder fleet">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>ALL YACHTS</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <input type="search" class="text-input" placeholder="ENTER SHIPYARD OR DESIGNER">
                    <input type="search" class="text-input" placeholder="ENTER YACHT NAME">
                    <div class="fast-find-range fleet-length">
                        <h3 class="title">LENGTH</h3>
                        <p>
                            <input class="amount" readonly />
                        </p>
                        <div class="slider-range"></div>
                    </div>
                    <div class="radio-column full-width">
                        <input type="radio" name="fleet-include" id="fleet-include-concepts" checked="checked" value="concepts">
                        <label for="fleet-include-concepts">CONCEPTS</label>
                        <input type="radio" name="fleet-include" id="fleet-include-under-construction" value="under-construction">
                        <label for="fleet-include-under-construction">UNDER CONSTRUCTION</label>
                        <input type="radio" name="fleet-include" id="fleet-include-models" value="models">
                        <label for="fleet-include-models">MODELS</label>
                    </div>
                </div>
                <div class="fast-find-options-holder videos">
                    <div class="fast-find-filter full-width">
                        <select>
                            <option>SY ORIGINALS</option>
                            <option>Option #1</option>
                            <option>Option #2</option>
                            <option>Option #3</option>
                            <option>Option #4</option>
                            <option>Option #5</option>
                        </select>
                    </div>
                    <input type="search" class="text-input" placeholder="ENTER ENTER KEYWORDS">
                </div>
                <div class="fast-find-search-button-holder">
                    <input type="submit" name="default" value="SEARCH" />
                </div>
                <div class="form-background"></div>
            </form>
        </div>
        <h3 class="results-title">Results</h3>
        <div class="results-pre-loader"><img src="/assets//images/ajax-loader.gif" alt="loading" />
        </div>
    </div>
</nav>