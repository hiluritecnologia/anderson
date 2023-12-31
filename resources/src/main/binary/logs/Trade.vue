<template>
  <div>
    <div
      class="mb-4 items-center justify-between xs:block xs:space-y-5 sm:flex sm:space-y-0"
    >
      <div class="font-medium">
        {{ $t("Binary Trade Contracts Log") }}
      </div>
      <Filter>
        <input
          v-model="filters.symbol.value"
          type="text"
          class="filter-input"
          placeholder="Transaction ID"
      /></Filter>
    </div>
    <div
      v-if="binaryStore.trade_contracts != null"
      class="card relative overflow-x-auto"
    >
      <VTable
        v-model:current-page="currentPage"
        class="w-full text-left text-sm text-gray-500 dark:text-gray-400"
        :data="binaryStore.trade_contracts"
        :filters="filters"
        :page-size="20"
        :hide-sort-icons="true"
        @totalPagesChanged="totalPages = $event"
      >
        <template #head>
          <tr
            class="bg-gray-100 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400"
          >
            <VTh sort-key="symbol" scope="col" class="py-3 px-6">
              <Col text="Symbol" />
            </VTh>
            <VTh sort-key="amount" scope="col" class="py-3 px-6">
              <Col text="Amount" />
            </VTh>
            <VTh sort-key="margin" scope="col" class="py-3 px-6">
              <Col text="Profit" />
            </VTh>
            <VTh sort-key="hilow" scope="col" class="py-3 px-6">
              <Col text="Rise/Fall" />
            </VTh>
            <VTh sort-key="result" scope="col" class="py-3 px-6">
              <Col text="Result" />
            </VTh>
            <VTh sort-key="status" scope="col" class="py-3 px-6">
              <Col text="Status" />
            </VTh>
            <VTh sort-key="created_at" scope="col" class="py-3 px-6">
              <Col text="Date" />
            </VTh>
            <!-- <th scope="col" class="py-3 px-6"></th> -->
          </tr>
        </template>
        <template #body="{ rows }">
          <template v-if="binaryStore.trade_contracts.length > 0">
            <tr
              v-for="row in rows"
              :key="row.id"
              class="border-b bg-white dark:border-gray-700 dark:bg-gray-800"
            >
              <td class="py-3 px-6" data-label="Symbol">
                {{ row.symbol }}/{{ row.pair }}
              </td>
              <td class="py-3 px-6" data-label="Amount">
                <toMoney :num="row.amount" decimals="2" />
                {{ row.pair }}
              </td>
              <td class="py-3 px-6" data-label="Profit">
                <span v-if="row.result == 1" class="badge bg-success">
                  <toMoney :num="row.margin" decimals="2" />
                  {{ row.pair }}</span
                >
                <span v-else-if="row.result == 2" class="badge bg-danger"
                  >-
                  <toMoney :num="row.amount" decimals="2" />
                  {{ row.pair }}</span
                >
                <span v-else-if="row.result == 3" class="badge bg-warning"
                  >0</span
                >
                <span v-else class="badge bg-warning">{{ $t("Pending") }}</span>
              </td>
              <td class="py-3 px-6" data-label="High/Low">
                <span v-if="row.hilow == 1" class="badge bg-success">{{
                  $t("Rise")
                }}</span>
                <span v-else-if="row.hilow == 2" class="badge bg-danger">{{
                  $t("Fall")
                }}</span>
              </td>
              <td class="py-3 px-6" data-label="Result">
                <span v-if="row.result == 1" class="badge bg-success">{{
                  $t("Win")
                }}</span>
                <span v-else-if="row.result == 2" class="badge bg-danger">{{
                  $t("Lose")
                }}</span>
                <span v-else-if="row.result == 3" class="badge bg-warning">{{
                  $t("Draw")
                }}</span>
                <span v-else class="badge bg-warning">{{ $t("Pending") }}</span>
              </td>
              <td class="py-3 px-6" data-label="Status">
                <span v-if="row.status == 0" class="badge bg-primary">{{
                  $t("Running")
                }}</span>
                <span v-else-if="row.status == 1" class="badge bg-success">{{
                  $t("Complete")
                }}</span>
              </td>
              <td class="py-3 px-6" data-label="Date">
                <toDate :time="row.created_at" />
              </td>
            </tr>
          </template>
          <template v-else>
            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
              <td colspan="100%" class="py-4 px-6">
                {{ $t("No results found!") }}
              </td>
            </tr>
          </template>
        </template>
      </VTable>
    </div>

    <VTPagination
      v-model:currentPage="currentPage"
      class="float-right flex items-center justify-between pt-4"
      aria-label="Table navigation"
      :total-pages="totalPages"
      :max-page-links="3"
      :boundary-links="true"
    >
      <template #firstPage> {{ $t("First") }} </template>

      <template #lastPage> {{ $t("Last") }} </template>

      <template #next
        ><span class="sr-only">{{ $t("Next") }}</span>
        <svg
          class="h-5 w-5"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </template>

      <template #previous>
        <span class="sr-only">{{ $t("Previous") }}</span>
        <svg
          class="h-5 w-5"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </template>
    </VTPagination>
  </div>
</template>

<script>
  import toMoney from "@/partials/toMoney.vue";
  import toDate from "@/partials/toDate.vue";
  import Filter from "@/partials/table/Filter.vue";
  import Col from "@/partials/table/Col.vue";
  import { useBinaryStore } from "@/store/binary";
  import { useUserStore } from "@/store/user";
  export default {
    components: { toDate, toMoney, Filter, Col },
    setup() {
      const userStore = useUserStore();
      const binaryStore = useBinaryStore();
      return { userStore, binaryStore };
    },
    data() {
      return {
        filters: {
          symbol: { value: "", keys: ["symbol"] },
        },
        currentPage: 1,
        totalPages: 0,
      };
    },
    created() {
      this.fetchData();
    },
    methods: {
      async fetchData() {
        if (this.binaryStore.trade_contracts.length == 0) {
          await this.binaryStore.fetch_trade_contracts();
        }
      },
    },
  };
</script>
